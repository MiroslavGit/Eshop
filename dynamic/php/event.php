<?php

session_start();

include("header.php");
?>

<head>
    <link rel="stylesheet" href="../css/event.css" />
</head>

<!-- Page content  -->
<div class="page-content" id="content">
    <!-- Menu button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill px-4 position-fixed m-5">
        <i class="fa fa-bars fa-fw"></i><small class="text-uppercase font-weight-bold">Menu</small>
    </button>

    <!-- Contact Form -->
    <h1 class="text-center">Big easter sale comming soon</h1>
    <div class="countdown-container">
        <div class="countdown-el days-c text-center ">
            <p class="big-text" id="days">0</p>
            <span>days</span>
        </div>
        <div class="countdown-el hours-c text-center">
            <p class="big-text" id="hours">0</p>
            <span>hours</span>
        </div>
        <div class="countdown-el mins-c  text-center">
            <p class="big-text" id="mins">0</p>
            <span>mins</span>
        </div>
        <div class="countdown-el seconds-c text-center">
            <p class="big-text" id="seconds">0</p>
            <span>seconds</span>
        </div>
    </div>

    <script src="../js/countdown_timer.js?<?php echo time(); ?>"></script>
    <?php
    include("footer.php");
    ?>