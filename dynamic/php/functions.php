<?php
function checkInput($ret)
{
    return quotemeta(addslashes(trim(strip_tags($ret))));
}

function checkFirstName($firstName)
{
    return (strlen($firstName) >= 3) && (strlen($firstName) <= 30);
}


function checkLasttName($lastName)
{
    return (strlen($lastName) >= 3) && (strlen($lastName) <= 30);
}


function checkPhone($t)
{
    return (strlen($t) >= 10);
}