<?php
//Connect Database
include ('config/db.php');

session_start();
if (!isset($_SESSION['email'])) {
    header('location: ./');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: ./");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pinecrest is an alternative payment solutions company that facilitates the easy use of cryptocurrencies for everyday transactions">
    <meta name="keywords" content="Bitcoin, Perfect Money, Digital assets, Gift cards, payments">
    <meta name="author" content="Pinecrest">
    <title>Dashboard | Dillion Property&reg;</title>

    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/d-favicon.png" />
</head>
<body class="sidebar-fixed">

    <div class="container-scroller">