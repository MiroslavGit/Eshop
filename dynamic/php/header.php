<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gym M</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="../css/vertical_nav.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/style.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/footer.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/chat_bot.css?<?php echo time(); ?>" />

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <!-- Vertical navbar -->
    <div class="vertical-nav bg-white fixed-top" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="d-flex">
                <a href="index.php">
                    <img src="../../photos/logo.jpg" alt="logo" width="65"
                        class="rounded-circle img-thumbnail shadow-sm" />
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

        <?php
        include("nav.php");
        ?>


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
                <a href="login.php">
                    <img src="../../photos/author.jpg" alt="logo" width="200"
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