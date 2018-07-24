<?php

// simple router
    $getPage = (isset($_GET['page']) ? $_GET['page'] : 'home');

    switch($getPage) {
        case 'home':
            require_once('views/HomeView.php');
            break;
        case 'services':
            require_once('views/ServicesView.php');
            break;
        case 'about':
            require_once('views/AboutView.php');
            break;
        case 'gallery':
            require_once('views/GalleryView.php');
            break;
        case 'pricing':
            require_once('views/PricingView.php');
            break;
        case 'contact':
            require_once('views/ContactView.php');
            break;
        default:
            header('Location: index.php');
    }

?>