<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anas Rasheed">
    <meta name="description" content="<?= $description ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="assets/image/fav-icon.webp" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/image/fav-icon.webp">
    <title><?= $title ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/image/logo.webp" alt="">
            </a>
            <button class="navbar-toggler shadow-none" style="outline: none; border:none;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><i class="bi bi-text-right fs-2 fw-bold blue-color"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="our-services.php">Overview</a></li>
                            <li><a class="dropdown-item" href="digital-marketing.php">Digital Marketing</a></li>
                            <li><a class="dropdown-item" href="designing.php">Designing</a></li>
                            <li><a class="dropdown-item" href="search-engine-marketing.php">Search Engine Marketing</a></li>
                            <li><a class="dropdown-item" href="web-and-app-development.php">Web & App Development</a></li>
                            <li><a class="dropdown-item" href="content-marketing.php">Content Marketing </a></li>
                            <li><a class="dropdown-item" href="social-media-marketing.php">Social Media Marketing</a></li>
                            <li><a class="dropdown-item" href="business-process-outsourcing.php">Business Process Outsourcing </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="portoflio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="tools.php">Tools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="tel:(888) 283-7250" class="text-decoration-none nav-tel"><i class="bi bi-telephone-fill"></i> (888) 283-7250</a>
                    <a href="tel:(888) 283-7250" class="btn bttn nav-btn">Call Now</a>
                </form>
            </div>
        </div>
    </nav>