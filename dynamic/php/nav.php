<ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
        <a href="index.php" class="nav-link text-dark font-italic ">
            <i class="fa fa-home fa-fw"></i> Home
        </a>
    </li>
    <li class="nav-item">
        <a href="shop.php" class="nav-link text-dark font-italic">
            <i class="fa fa-credit-card fa-fw"></i> Shop
        </a>
    </li>
    <li class="nav-item">
        <a href="event.php" class="nav-link text-dark font-italic">
            <i class="fa fa-gift fa-fw"></i> Special Sale
        </a>
    </li>
    <li class="nav-item">
        <a href="contact.php" class="nav-link text-dark font-italic">
            <i class="fa fa-envelope fa-fw"></i> Contact
        </a>
    </li>
    <!-- Print number of products into navigation -->
    <?php
    if (isset($_SESSION['cart'])) {
        $poc = count($_SESSION['cart']);
        echo '<li class="nav-item">';
        echo '<a href="cart.php" class="nav-link text-dark font-italic">';
        echo '<i class="fa fa-shopping-cart fa-fw"></i> Cart ' . "<span class='bg-warning rounded-pill py-1 px-1'> $poc </span>";
        echo '</a> </li>';
    } else {
        echo '<li class="nav-item">';
        echo '<a href="cart.php" class="nav-link text-dark font-italic">';
        echo '<i class="fa fa-shopping-cart fa-fw"></i> Cart ';
        echo '</a> </li>';
    }
    ?>
    <li class="nav-item">
        <a href="user_login.php" class="nav-link text-dark font-italic border border-warning sign_in_button">
            <i class="fa fa-sign-in fa-fw"></i> <strong>Sign in</strong>
        </a>
    </li>





</ul>