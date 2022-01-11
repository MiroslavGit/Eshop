<?php

session_start();

include("header.php");
?>

<!-- Page content  -->
<div class="page-content" id="content">
    <!-- Menu button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill px-4 position-fixed m-5">
        <i class="fa fa-bars fa-fw"></i><small class="text-uppercase font-weight-bold">Menu</small>
    </button>

    <!-- header -->
    <header id="header" class="vh-100 carousel slide" data-bs-ride="carousel">
        <div class="container h-100 d-flex align-items-center carousel-inner">
            <div class="text-center carousel-item active">
                <h2 class="text-capitalize text-white">Surprise your loved ones</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white">
                    With practical equipments for exercise
                </h1>
                <a href="shop.php" class="text-decoration-none">
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
                <a href="shop.php" class="text-decoration-none">
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
                <a href="shop.php" class="text-decoration-none">
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
                <a href="shop.php" class="text-decoration-none">
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
                            <img src="../../photos/products/product1.webp" class="w-100" />
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
                            <img src="../../photos/products/product2.webp" class="w-100" />
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
                            <img src="../../photos/products/product3.webp" class="w-100" />
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
                            <img src="../../photos/products/product4.webp" class="w-100" />
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
                            <img src="../../photos/products/product5.webp" class="w-100" />
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
                            <img src="../../photos/products/product6.webp" class="w-100" />
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
                            <img src="../../photos/products/product7.webp" class="w-100" />
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
                            <img src="../../photos/products/product8.webp" class="w-100" />
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


    <?php
    include("footer.php");
    ?>