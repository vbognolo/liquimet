<!DOCTYPE html>
<html lang="it">
<head>
    <title>
        <?= html_escape($title) ?>
    </title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="../public/css/styles.css"  type="text/css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">

</head>

<body>
    <header id="header" class="header d-flex align-items-center justify-content-center">
                                <!-- Logo -->
        <div class="d-flex align-items-center div-title">
            <a href="index.html" class="logo d-flex align-items-center w-100">
                <img src="../public/img/liquimet_logo.jpg" class="img-logo my-auto" alt="">
                <div class="vr ms-3"></div>
                <h3 class="d-none d-lg-block my-auto ms-4" id="title">LNG Padova</h3>
            </a>
        </div>
                                <!-- End Logo -->

                                <!-- Navigation -->
        <ul class="nav nav-tabs-bordered d-flex my-auto mx-auto p-2 hstack gap-3" id="navigation">
            <li class="nav-item nav-justified nav-fill ms-3">
                <a class="nav-link w-100 active" id="platform-tab" data-bs-toggle="tab" aria-controls="nav-platform" aria-selected="true"
                    href="index.php">
                        Piattaforma
                </a>
            </li>

            <li class="vr"></li>
                                    
            <li class="nav-item nav-justified nav-fill">
                <a class="nav-link w-100" id="charts-tab" data-bs-toggle="tab" aria-controls="nav-charts" aria-selected="false"
                    href="error.php">
                        Schema
                </a>
            </li>

            <li class="vr"></li>
                                    
            <li class="nav-item nav-justified nav-fill me-3">
                <a class="nav-link w-100" id="user-tab" data-bs-toggle="tab" aria-controls="nav-user" aria-selected="false"
                    href="user.php">
                        Utenti
                </a>
            </li>
        </ul>
                                <!-- End Navigation -->

                                <!-- Search Bar -->
        <div class="search-bar ms-auto p-2">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Cerca" title="Enter search keyword">
                <button type="submit" title="Cerca"><i class="bi bi-search"></i></button>
            </form>
        </div>
                                <!-- End Search Bar -->

                                <!-- Search Icon -->
        <nav class="header-nav me-1 p-2">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle" href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                                <!-- End Search Icon-->

                                <!-- Profile Icon -->
                <li class="nav-item dropdown d-flex align-items-center ms-5 p-2" style="float: right;">
                    <a class="nav-link dropdown-toggle ms-5 p-2" href="user.php" data-bs-toggle="dropdown" id="nav-profile">
                        vbognolo
                    </a>
                                <!-- End Profile Icon -->

                                <!-- Profile Dropdown Items -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h5>Valentina Bognolo</h5>
                                <span>Amministratore</span>
                        </li>
            
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex justify-content-center" href="#">
                                <span>Profilo</span>
                            </a>
                        </li>
            
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex justify-content-center" href="#">
                                <span>Impostazioni</span>
                            </a>
                        </li>
            
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex justify-content-center" href="#">
                                <span>Esci</span>
                            </a>
                        </li>
                    </ul>             
                </li>               
            </ul>
        </nav>                   
    </header>