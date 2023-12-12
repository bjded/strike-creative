<?php
    include_once 'php/functions.php';

    if ($page != "Home") {
        $page_title = "Strike Creative :: ". $page ." | www.strikexcreative.com";
    }
    elseif ($page == "Home") {
        $page_title = "Strike Creative | www.strikexcreative.com";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($page_title); ?></title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!-- CDN -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- Local -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
