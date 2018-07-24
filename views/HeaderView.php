<?php
    $hasPage = !empty($pageName);
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $hasPage ? "$pageName" : "" ?></title>
    <link rel="stylesheet" href="resources/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    
    <!-- fonts -->
    <!-- downloaded and added @font-face in styles.cs s-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">  -->

    <!-- custom css -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- # MENU (fixed to top) -->
    <div class="container-fluid sm-position-fixed z2000 color-grey1-bg align-right-text">
        <!-- ## LOGO -->
        <div class="float-left margin-left-big1 padding-topbottom1">
            <a href=""><img src="images/logo_small.png"></a>
        </div>
        <!-- ## MENU ITEMS -->
        <div class="font-1 font-size-bigger1">
            <!-- ### HOME -->
            <a href="index.php?page=home" class="display-inline-block menu-border1 menu-margin1 menu-margin2 
                    menu-padding-tb1 menu-padding-l1 menu-padding-r1 menu-color-active">
                Home
            </a>
            <!-- ### SERVICES (dropdown) -->
            <div class="btn-group align-top display-inline-block menu-border1 menu-margin1 menu-margin2 
                    menu-color1">
                <a href="index.php?page=services" 
                        class="display-inline-block menu-padding-tb1 menu-padding-l1 menu-color1">
                    Services
                </a>
                <a class="display-inline-block menu-padding-tb1 menu-padding-r1 menu-color1 
                        dropdown-toggle dropdown-toggle-split cursor-pointer" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!-- <span class="sr-only">Toggle Dropdown</span> -->
                </a>
                <div class="dropdown-menu dropdown-menu-right menu-color2">
                    <a class="dropdown-item" href="index.php?page=services#weddings">Weddings</a>
                    <a class="dropdown-item" href="index.php?page=services#events">Events</a>
                    <a class="dropdown-item" href="index.php?page=services#holiday">Holiday Lighting</a>
                </div>
            </div>
            <!-- ### ABOUT -->
            <a href="index.php?page=about" class="display-inline-block menu-border1 menu-margin1 menu-margin2 
                    menu-padding-tb1 menu-padding-l1 menu-padding-r1 menu-color1">About</a>
            <!-- ### GALLERY -->
            <a href="index.php?page=gallery" class="display-inline-block menu-border1 menu-margin1 menu-margin2 
                    menu-padding-tb1 menu-padding-l1 menu-padding-r1 menu-color1">Gallery</a>
            <!-- ### PRICING -->
            <a href="index.php?page=pricing" class="display-inline-block menu-border1 menu-margin1 menu-margin2 
                    menu-padding-tb1 menu-padding-l1 menu-padding-r1 menu-color1">Pricing</a>
            <!-- ### CONTACT -->
            <a href="index.php?page=contact" 
                    class="button1 display-inline-block menu-padding-tb1 menu-padding-l1 menu-padding-r1"
                    onclick="location.href='index.php?page=contact'">
                Contact Us
            </a>
        </div>
    </div>