<?php
session_start();
error_reporting(0);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include("includes/db.php");
include_once("server/server.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tiffin best tiffin services</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- Favicons -->
  <link href="assets/img/tiffin-np.png" rel="icon">
  <!-- <link href="assets/img/tiffin-icon.png" rel="icon"> -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    .fab {
      position: fixed;
      right: 32px;
      bottom: 32px;
      z-index: 1000;
    }

    .fab .btn-floating {
      font-size: 50px;
      /* font-size: 24px; */
      /* background-color: green; */
      color: #008000;
    }

    .fab .fa-whatsapp {
      font-family: "Font Awesome 6 Brands";
      font-weight: 400;
    }

    .fab .btn-floating:hover {
      /* background-color: #25d366; */
      /* background-color: #008000; */
      color: #05b346;
    }

    /* Ensure the main content is not overlapped by the WhatsApp button */
    main {
      padding-bottom: 100px;
      /* Add space at the bottom to ensure content doesn't get hidden behind the floating button */
    }
  </style>
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/tiffin-np.png" alt="">
        <!-- <img src="assets/img/tiffin-icon.png" alt=""> -->
        <h1 class="sitename">Tiffin</h1>
        <span>.</span>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home<br></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="whyus.php">Why Us</a></li>
          <!-- <li><a href="#events">Events</a></li> -->
          <!-- <li><a href="#chefs">Chefs</a></li> -->
          <!-- <li><a href="#gallery">Gallery</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="contact.php">Contact</a></li>
          <li><a target="_blank" href="https://api.whatsapp.com/send?phone=919958787177&amp;text=Hi"
              class="whatsapp-chat">
              <img decoding="async"
                class="alignnone1 size-full"
                src="./assets/img/WhatsApp_icon.webp"
                alt="WhatsApp Chat"
                style="width: 40px; height: 40px;">
            </a> </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="order.php">Order Tiffin</a>
    </div>
  </header>