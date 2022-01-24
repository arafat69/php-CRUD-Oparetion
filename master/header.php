<?php
session_start();
$path = 'http://localhost/phpcrud/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= $path ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $path ?>css/datatables.min.css">
    <link rel="stylesheet" href="<?= $path ?>css/toastr.min.css">
    <link rel="shortcut icon" href="<?= $path ?>image/logo.png" type="image/x-icon">
</head>
<style>
    .border-right {
        border-right: 1px solid #b1b6bb !important;
    }

    .page-wrap {
        min-height: 100vh;
    }
</style>

<body style="font-family: sans-serif;">