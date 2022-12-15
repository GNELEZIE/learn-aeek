<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AEEK LEARN - <?=ucfirst($page)?></title>
    <link rel="icon" href="<?=$asset?>/media/logoAEEK.png" type="image/x-icon">
    <meta name="robots" content="noindex">
    <link type="text/css" href="<?=$asset?>/assets/vendor/perfect-scrollbar.css" rel="stylesheet">
    <link type="text/css" href="<?=$asset?>/assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="<?=$asset?>/assets/css/app.rtl.css" rel="stylesheet">
    <link type="text/css" href="<?=$asset?>/assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="<?=$asset?>/assets/css/vendor-material-icons.rtl.css" rel="stylesheet">
    <link type="text/css" href="<?=$asset?>/assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="<?=$asset?>/assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">
    <link type="text/css" href="<?=$asset?>/assets/css/vendor-ion-rangeslider.css" rel="stylesheet">
    <link type="text/css" href="<?=$asset?>/assets/css/vendor-ion-rangeslider.rtl.css" rel="stylesheet">
    <link type="text/css" href="<?=$asset?>/assets/css/padding.css" rel="stylesheet">
    <style>
        [dir=ltr] .mdk-header-layout__content {
            z-index: 999999 !important;
            position: fixed !important;
            width: 100% !important;
        }
    </style>
</head>

<body class="layout-fluid layout-sticky-subnav">
<div class="preloader"></div>
<div class="mdk-header-layout js-mdk-header-layout">
    <div class="mdk-header-layout__content page">
        <div class="page__header page__header-nav mb-0">
            <div class="container-fluid page__container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="navbar navbar-secondary navbar-light navbar-expand-sm p-0 d-none d-md-flex" id="secondaryNavbar">
                            <a class="navbar-brand" href="<?=$domaine?>"><img src="<?=$asset?>/media/logoAEEK.png" width="50" alt="logo" class="img-responsive"></a>
                            <ul class="nav navbar-nav">
                                <li class="nav-item"> <a href="<?=$domaine?>" class="nav-link">Accueil</a> </li>
                                <li class="nav-item"> <a href="<?=$domaine?>/" class="nav-link">Cours</a> </li>
                                <li class="nav-item"> <a href="<?=$domaine?>/" class="nav-link">Evaluation</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle pb-0 pt20" data-toggle="dropdown">Mon compte</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?=$domaine?>/">Profil</a>
                                    <a class="dropdown-item" href="<?=$domaine?>/">Mot de passe</a>
                                    <a class="dropdown-item" href="<?=$domaine?>/">Mes devoirs</a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>