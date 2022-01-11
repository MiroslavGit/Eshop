<?php

session_start();
if (isset($_POST['add'])) {
    $_SESSION['cart'][] = $_POST['add'];
}

include("header.php");
include("data.php");

?>

<head>
    <link rel="stylesheet" href="../css/shop.css" />
</head>

<!-- Page content  -->
<div class="page-content" id="content">
    <!-- Menu button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill px-4 position-fixed m-5">
        <i class="fa fa-bars fa-fw"></i><small class="text-uppercase font-weight-bold">Menu</small>
    </button>

    <!-- Shop -->
    <div class="container">
        <div class="m-5 p-2 text-center bg-warning w-50 mx-auto rounded-pill">
            <h2 class=" w-100">Everything in one place</h2>
        </div>

        <div class="row">
            <!-- Print all products -->
            <?php
            foreach ($names as $value => $name) {
                echo '<div class="col-md-3 col-sm-6">';
                echo '<div class="product-grid2">';
                echo '<div class="product-image2">';
                echo "<img class='pic-1' src='../../photos/$images[$value]' />";
                echo '<ul class="social">';
                echo '<li>';
                echo '<a href="../../photos/products/product1.webp" target="_top" data-tip="Quick View"><i class="fa fa-eye"></i></a>';
                echo '</li>';
                echo '<li>';
                echo '<form method="post"><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a> </form>';
                echo '</li>';
                echo '</ul>';
                echo '<form method="post" class="form_kosik">';
                echo "<button name='add' value='$index[$value]' class='add-to-cart text-white bg-dark text-center'> Add to cart </button>";
                echo "</form>";
                echo '</div>';
                echo '<div class="product-content text-center">';
                echo "<h3 class='title text-dark'> $names[$value] </h3>";
                echo "<span class='price text-dark'>$prices[$value] €</span>";
                echo '</div> </div> </div>';
            }
            ?>

        </div>
    </div>
</div>

<?php
include("footer.php");
?>