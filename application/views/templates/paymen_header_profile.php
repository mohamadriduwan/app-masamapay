<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title><?= $title; ?></title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url('assets/') ?>img/lembaga/logo.jpg" sizes="180x180">
    <link rel="icon" href="<?= base_url('assets/') ?>img/lembaga/logo.jpg" sizes="32x32" type="image/jpg">
    <link rel="icon" href="<?= base_url('assets/') ?>img/lembaga/logo.jpg" sizes="16x16" type="image/jpg">

    <!-- Google fonts-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/swiperjs-6.6.2/swiper-bundle.min.css">

    <!-- style css for this template -->
    <link href="<?= base_url('assets/') ?>css/stylemobile.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll" data-page="wallet">

    <!-- loader section -->

    <!-- loader section ends -->
    <main class="h-100">

        <!-- Header -->
        <header class="header position-fixed">
            <div class="row">
                <div class="col-auto">
                    <button class="btn btn-light btn-44" onclick="window.location.replace('<?= base_url('paymen/profile') ?>');">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                </div>
                <div class="col align-self-center text-center">
                    <h5><?= $title; ?></h5>
                </div>
                <div class="col-auto">
                    <a href="notifications.html" target="_self" class="btn btn-light btn-44">
                        <i class="bi bi-bell"></i>
                        <span class="count-indicator"></span>
                    </a>
                </div>
            </div>
        </header>