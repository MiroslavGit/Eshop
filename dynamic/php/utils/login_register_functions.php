<?php


// funkia ktora kontroluje ci je uzivatelom zadany nickName v korektnom tvare a ci neobsahuje neziaduce znaky

// vo vsetkych podmienkach nizsie kontrolujeme errors ako prve - to znamena ten ! pred podmienkou

function invalidNickname($nickName)
{
    $result; // premenna ktora je true alebo false 
    if (!preg_match("/^[a-zA-Z0-9]*$/", $nickName)) { // preg_match vrati ci sa v retazci nasla zhoda s tym co zadal uzivatel 
        // tu sa dostaneme ak uzivatel zada do svojho nickname nieco ine ako pismena od a-z alebo A-Z alebo cisel 0-9
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

// funkcia ktora kontroluje ci sa hesla zhoduju

function passwordMatch($password, $passwordRepeat)
{
    $result;
    if ($password !== $passwordRepeat) {
        $result = false; // ak sa returne true - to znamena ze to je error
    } else {
        $result = true;
    }

    return $result;
}

// funkcia ktora kontroluje ci uz zadany nickname existuje v databaze

function nicknameExists($conn, $nickName, $email)
{
    // tento sql kod znamena ze selectni vsetko z tabulky users kde nickname sa rovna ? - otaznik znamena text zadany uzivatelom - porovnava zadany text s textom v databaze 
    $sql = "SELECT * FROM users WHERE nickname = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn); // inicializujeme prepare statement, ktory sa pouziva proti tomu aby uzivatel nezadal do input field nejaky sql kod ktory by nam mohol znicit databazu/vymazat zaznamy
    // $sql tam pridavame preto, pretoze ten sql kod sa vykona este predtym ako uzivatel zacne zadavat input (meno, priezvisko...) a to je ochrana pred tym aby uzivatel zadal nejaky neziaduci kod do input field

    // v tejto podmienke kontrolujeme ci nastali nejake chyby
    if (!mysqli_stmt_prepare($stmt, $sql)) { // podmienka znamena - spusti sql kod ktory je v premennej SQL a vypis vsetky chyby ktore nastali, pretoze najprv kontrolujeme chyby pomocou ! na zaciatku
        header("location: ../../public/usr/signup_page.php?error=stmtFailed"); // toto je vypis v url prehliadaci
        exit();
        // v tejto casti podmienky sa robi to: ak nastala nejaka chyba, tak vrati to uzivatela na stranku signup_page s errorom v url 
    }

    mysqli_stmt_bind_param($stmt, "ss", $nickName, $email); // "ss" ako druhy parameter znamena 2krat string (s ako string) a dvakrat preto pretoze chceme zobrat z databazy nickName a email ktore su obidva typu string
    mysqli_stmt_execute($stmt); // tato metoda bere data z databazy ak sa v nej nachadzaju, pretoze sme vo funkcii ktora kontroluje ci uzivatel uz existuje

    $resultData = mysqli_stmt_get_result($stmt); // tu do premennej resultData bereme vsetky data ktore sa nasli v konkretnej databaze pod konkretnym dopytom a ukladam ich v nej (premennej)

    // tato podmienka vyvolava data z databazy ktore uklada do associative arrayu 
    // v skratke znamena - ak mam nejake data v databaze, tak returne to true, ak nie tak false 
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row; // returnujem data z databazy ak tam uzivatel existuje   
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt); // zatvarame statement

}

// tato funkcia vytvara uzivatela ak v databaze este neexistuje

function createUser($conn, $firstName, $lastName, $nickName, $email, $password)
{
    // v sql premennej insertujeme data o uzivatelovi do tabulky users 

    $sql = "INSERT INTO `users`(`first_name`, `last_name`, `nickname`, `email`, `password`) VALUES (?, ?, ?, ?, ?);"; // otazniky znamenaju values ktore zadal uzivatel pri vyplnani formularu
    // novy prepared statement s connection do databazy 
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../public/usr/signup_page.php?error=stmtfailed");
        exit();
    }

    // hashed password sa pouziva pre zasifrovanie hesla - aby nebolo jednoduche zistit hesla prihlasenych uzivatelov

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $nickName, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../../public/usr/signup_page.php?error=none");
    exit();
}


function loginUser($conn, $nickName, $password)
{

    $nicknameExists = nicknameExists($conn, $nickName, $nickName);

    if ($nicknameExists == false) {
        header("location: ../../public/usr/login_page.php?error=wrongLogin");
        exit();
    }

    // nicknameExists je associative array a v [] je nazov stlpca z ktoreho chceme brat data 

    $passwordHashed = $nicknameExists["password"];

    // password_verify je build-in funkcia ktora z hashnuteho hesla skontroluje ci sa zhoduje s tym ktore bolo zadane predtym - ako keby ho "odtaji" xd
    $checkPassword = password_verify($password, $passwordHashed);
    // podmienka - ak sa heslo zadane uzivatelom nezhoduje s heslom v databaze tak to returne false
    if ($checkPassword == false) {
        header("location: ../../public/usr/login_page.php?error=wrongLogin");
        exit();
    } elseif ($checkPassword == true) {
        // session znamena, ze ten uzivatel bude prihlaseny aj ked sa bude preklikavat na inych podstrankach
        session_start();
        // v [] pri _SESSION zadavame nazov super globalnej premennej ktoru mozeme pouzit potom na hocijakej stranke - ak chceme ziskat pristup k id uzivatela alebo nickname uzivatela z databazy
        $_SESSION["userId"] = $nicknameExists["id"];
        $_SESSION["userNickname"] = $nicknameExists["nickname"];

        header("location: ../../public/main/main_page.php");
        exit();
    }
}