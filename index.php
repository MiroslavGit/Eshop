<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gym M</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="dynamic/css/chat_bot.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="dynamic/css/vertical_nav.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="dynamic/css/style.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="dynamic/css/footer.css?<?php echo time(); ?>" />

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <!-- Vertical navbar -->
    <div class="vertical-nav bg-white fixed-top" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="d-flex">
                <a href="index.php">
                    <img src=" photos/logo.jpg" alt="logo" width="65" class="rounded-circle img-thumbnail shadow-sm" />
                </a>
                <div class="media-body ms-1">
                    <h4 class="m-0">Gym M Shop</h4>
                    <p class="font-weight-light text-muted mb-0">
                        The best on the market
                    </p>
                </div>
            </div>
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">
            Main menu
        </p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-dark font-italic ">
                    <i class="fa fa-home fa-fw"></i> Home
                </a>
            </li>
            <li class="nav-item">
                <a href="dynamic/php/shop.php" class="nav-link text-dark font-italic">
                    <i class="fa fa-credit-card fa-fw"></i> Shop
                </a>
            </li>
            <li class="nav-item">
                <a href="dynamic/php/event.php" class="nav-link text-dark font-italic">
                    <i class="fa fa-gift fa-fw"></i> Special Sale
                </a>
            </li>
            <li class="nav-item">
                <a href="dynamic/php/contact.php" class="nav-link text-dark font-italic">
                    <i class="fa fa-envelope fa-fw"></i> Contact
                </a>
            </li>
            <!-- Print number of products into navigation -->
            <?php
            if (isset($_SESSION['cart'])) {
                $poc = count($_SESSION['cart']);
                echo '<li class="nav-item">';
                echo '<a href="dynamic/php/cart.php" class="nav-link text-dark font-italic">';
                echo '<i class="fa fa-shopping-cart fa-fw"></i> Cart ' . "<span class='bg-warning rounded-pill py-1 px-1'> $poc </span>";
                echo '</a> </li>';
            } else {
                echo '<li class="nav-item">';
                echo '<a href="dynamic/php/cart.php" class="nav-link text-dark font-italic">';
                echo '<i class="fa fa-shopping-cart fa-fw"></i> Cart ';
                echo '</a> </li>';
            }
            ?>
            <li class="nav-item">
                <a href="dynamic/php/user_login.php"
                    class="nav-link text-dark font-italic border border-warning sign_in_button">
                    <i class="fa fa-sign-in fa-fw"></i> <strong>Sign in</strong>
                </a>
            </li>
        </ul>


        <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">
            Social networks
        </p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="https://www.facebook.com/" class="nav-link text-dark font-italic">
                    <i class="fa fa-facebook fa-fw"> </i> Facebook
                </a>
            </li>
            <li class="nav-item">
                <a href="https://www.instagram.com/" class="nav-link text-dark font-italic">
                    <i class="fa fa-instagram fa-fw"></i> Instagram
                </a>
            </li>
            <li class="nav-item">
                <a href="https://twitter.com/" class="nav-link text-dark font-italic">
                    <i class="fa fa-twitter fa-fw"></i> Twitter
                </a>
            </li>
        </ul>

        <div class="py-4 px-3 bg-light">
            <div class="text-center">
                <a href="dynamic/php/login.php">
                    <img src=" photos/author.jpg" alt="logo" width="200"
                        class="rounded-circle img-thumbnail shadow-sm" /></a>
                <div class="media-body ms-1">
                    <h4 class="m-0">Author</h4>
                    <p class="font-weight-light text-muted mb-0 py-1">
                        Miroslav Hanisko
                    </p>
                    <p class="font-weight-light text-muted mb-0">SPŠT SNV</p>
                    <p class="font-weight-light text-muted mb-0">IV. D</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End vertical navbar -->

    <!-- Page content  -->
    <div class="page-content" id="content">
        <!-- Menu button -->
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill px-4 position-fixed m-5">
            <i class="fa fa-bars fa-fw"></i><small class="text-uppercase font-weight-bold">Menu</small>
        </button>

        <!-- header -->
        <!-- Carousel -->
        <header id="header" class="vh-100 carousel slide" data-bs-ride="carousel">
            <div class="container h-100 d-flex align-items-center carousel-inner">
                <div class="text-center carousel-item active">
                    <h2 class="text-capitalize text-white">Surprise your loved ones</h2>
                    <h1 class="text-uppercase py-2 fw-bold text-white">
                        With practical equipments for exercise
                    </h1>
                    <a href="dynamic/php/shop.php" class="text-decoration-none">
                        <div class="my_button mt-3 text-uppercase text-warning">
                            <span>buy now</span>
                        </div>
                    </a>
                </div>
                <div class="text-center carousel-item">
                    <h2 class="text-capitalize text-white">
                        Gifts for a friend, brother or grandfather
                    </h2>
                    <h1 class="text-uppercase py-2 fw-bold text-white">At one place</h1>
                    <a href="dynamic/php/shop.php" class="text-decoration-none">
                        <div class="my_button mt-3 text-uppercase text-warning">
                            <span>buy now</span>
                        </div>
                    </a>
                </div>
                <div class="text-center carousel-item">
                    <h2 class="text-capitalize text-white">Christmas presents</h2>
                    <h1 class="text-uppercase py-2 fw-bold text-white">
                        with which you are guaranteed to hit the black
                    </h1>
                    <a href="dynamic/php/shop.php" class="text-decoration-none">
                        <div class="my_button mt-3 text-uppercase text-warning">
                            <span>buy now</span>
                        </div>
                    </a>
                </div>
                <div class="text-center carousel-item">
                    <h2 class="text-capitalize text-white">
                        Discover Christmas presents
                    </h2>
                    <h1 class="text-uppercase py-2 fw-bold text-white">
                        which will please every woman
                    </h1>
                    <a href="dynamic/php/shop.php" class="text-decoration-none">
                        <div class="my_button mt-3 text-uppercase text-warning">
                            <span>buy now</span>
                        </div>
                    </a>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </header>
        <!-- end of header -->

        <!-- collection -->
        <section id="collection" class="py-5">
            <div class="container">
                <div class="title text-center">
                    <h2 class="position-relative d-inline-block pt-2">New Products</h2>
                </div>

                <div class="row g-0">
                    <div class="
                d-flex
                flex-wrap
                justify-content-center
                mt-5
                filter-button-group
              ">
                        <button type="button" class="btn m-2 text-body active-filter-btn" data-filter="*">
                            All
                        </button>
                        <button type="button" class="btn m-2 text-body" data-filter=".best">
                            Best Sellers
                        </button>
                        <button type="button" class="btn m-2 text-body" data-filter=".feat">
                            Featured
                        </button>
                        <button type="button" class="btn m-2 text-body" data-filter=".new">
                            New Arrival
                        </button>
                    </div>

                    <div class="collection-list mt-4 row gx-0 gy-3">
                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                            <div class="collection-img position-relative">
                                <img src=" photos/products/product1.webp" class="w-100" />
                            </div>
                            <div class="text-center">
                                <div class="rating mt-3">
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                </div>
                                <p class="text-capitalize my-1">Protein</p>
                                <span class="fw-bold">17,70 €</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                            <div class="collection-img position-relative">
                                <img src=" photos/products/product2.webp" class="w-100" />
                            </div>
                            <div class="text-center">
                                <div class="rating mt-3">
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                </div>
                                <p class="text-capitalize my-1">Peanut butter</p>
                                <span class="fw-bold">5,50 €</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
                            <div class="collection-img position-relative">
                                <img src=" photos/products/product3.webp" class="w-100" />
                            </div>
                            <div class="text-center">
                                <div class="rating mt-3">
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                </div>
                                <p class="text-capitalize my-1">Multivitamin</p>
                                <span class="fw-bold">4,99 €</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                            <div class="collection-img position-relative">
                                <img src=" photos/products/product4.webp" class="w-100" />
                            </div>
                            <div class="text-center">
                                <div class="rating mt-3">
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                </div>
                                <p class="text-capitalize my-1">Thor</p>
                                <span class="fw-bold">27 €</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                            <div class="collection-img position-relative">
                                <img src=" photos/products/product5.webp" class="w-100" />
                            </div>
                            <div class="text-center">
                                <div class="rating mt-3">
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                </div>
                                <p class="text-capitalize my-1">Creatine</p>
                                <span class="fw-bold">12.50 €</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
                            <div class="collection-img position-relative">
                                <img src=" photos/products/product6.webp" class="w-100" />
                            </div>
                            <div class="text-center">
                                <div class="rating mt-3">
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                </div>
                                <p class="text-capitalize my-1">Pro amino</p>
                                <span class="fw-bold">16 €</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                            <div class="collection-img position-relative">
                                <img src=" photos/products/product7.webp" class="w-100" />
                            </div>
                            <div class="text-center">
                                <div class="rating mt-3">
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                </div>
                                <p class="text-capitalize my-1">Synephryne</p>
                                <span class="fw-bold">5.50 €</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                            <div class="collection-img position-relative">
                                <img src="photos/products/product8.webp" class="w-100" />
                            </div>
                            <div class="text-center">
                                <div class="rating mt-3">
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                    <span class="text-primary"><i class="fa fa-star"></i></span>
                                </div>
                                <p class="text-capitalize my-1">Nero</p>
                                <span class="fw-bold">45.50 €</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of collection -->

        <!-- newsletter -->
        <section id="newsletter" class="py-5">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="title text-center pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">
                            Newsletter Subscription
                        </h2>
                    </div>

                    <p class="text-center text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                        rem officia accusantium maiores quisquam dolorum?
                    </p>
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Enter Your Email ..." />
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of newsletter -->

        <!-- Chat bot -->
        <?php
        include("dynamic/php/chat_bot.php");
        ?>

        <!-- footer -->
        <footer class="bg-dark py-5 mt-5">
            <div class="container">
                <div class="row text-white">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-light text-uppercase">About</h5>
                        <p class="text-white text-muted mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum mollitia quisquam veniam
                            odit cupiditate, ullam aut voluptas velit dolor ipsam?
                        </p>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-light text-uppercase">Links</h5>
                        <ul class="list-unstyled">
                            <li class="my-3">
                                <a href="index.php" class="text-white text-decoration-none text-muted">
                                    <i class="fa fa-chevron-right me-1"></i> Home
                                </a>
                            </li>
                            <li class="my-3">
                                <a href="dynamic/php/shop.php" class="text-white text-decoration-none text-muted">
                                    <i class="fa fa-chevron-right me-1"></i> Shop
                                </a>
                            </li>
                            <li class="my-3">
                                <a href="dynamic/php/event.php" class="text-white text-decoration-none text-muted ">
                                    <i class="fa fa-chevron-right me-1"></i> Special sale
                                </a>
                            </li>
                            <li class="my-3">
                                <a href="dynamic/php/contact.php" class="text-white text-decoration-none text-muted">
                                    <i class="fa fa-chevron-right me-1"></i> Contact
                                </a>
                            </li>
                            <li class="my-3">
                                <a href="dynamic/php/cart.php" class="text-white text-decoration-none text-muted">
                                    <i class="fa fa-chevron-right me-1"></i> Cart
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-light mb-3 text-uppercase">Contact Us</h5>
                        <div class="d-flex justify-content-start text-muted">
                            <span class="me-3">
                                <i class="fa fa-map"></i>
                            </span>
                            <span class="fw-light">
                                Spišská Nová Ves, Slovensko, 00513, Europe
                            </span>
                        </div>
                        <div class="
                  d-flex
                  justify-content-start
                  align-items-start
                  my-2
                  text-muted
                ">
                            <span class="me-3">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <span class="fw-light"> gymm.support@gmail.com </span>
                        </div>
                        <div class="
                  d-flex
                  justify-content-start
                  align-items-start
                  my-2
                  text-muted
                ">
                            <span class="me-3">
                                <i class="fa fa-phone"></i>
                            </span>
                            <span class="fw-light"> +9786 6776 236 </span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-light mb-3 text-uppercase">Follow Us</h5>
                        <div>
                            <ul class="list-unstyled d-flex">
                                <li>
                                    <a href="https://www.facebook.com/" class="
                        text-white text-decoration-none text-muted
                        fs-4
                        me-4
                      ">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" class="
                        text-white text-decoration-none text-muted
                        fs-4
                        me-4
                      ">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" class="
                        text-white text-decoration-none text-muted
                        fs-4
                        me-4
                      ">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/MiroslavGit"
                                        class="text-white text-decoration-none text-muted fs-4">
                                        <i class="fa fa-github"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
    </div>
    <!-- End page content -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- jquery -->
    <script src="dynamic/js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- custom js -->
    <script src="dynamic/js/csript.js?<?php echo time(); ?>"></script>
    <script src="dynamic/js/responses.js?<?php echo time(); ?>"></script>
    <script src="dynamic/js/chaat_bot.js?<?php echo time(); ?>"></script>
</body>

</html>