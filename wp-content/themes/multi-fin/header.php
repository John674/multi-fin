<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png"
          type="image/x-icon">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
<div class="content-wrapper">
    <header class="wrapper bg-dark">
        <nav class="navbar navbar-expand-lg classic transparent navbar-dark">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="/">
                        <img class="logo-dark" src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
                        <img class="logo-light" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <a href="/">
                            <img class="logo-dark" src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
                            <img class="logo-light" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
                        </a>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link scroll active" href="#about"><?php echo __('About', 'multi_fin') ?></a></li>
                            <li class="nav-item"><a class="nav-link scroll" href="#services"><?php echo __('Services', 'multi_fin') ?></a></li>
                            <li class="nav-item"><a class="nav-link scroll" href="#address"><?php echo __('Address', 'multi_fin') ?></a></li>
                            <li class="nav-item"><a class="nav-link scroll" href="#contact"><?php echo __('Contact', 'multi_fin') ?></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other ms-lg-4">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item dropdown language-select text-uppercase">
                            <?php $languages = pll_the_languages( ['raw' => 1] );
                            $currentLang = array_filter($languages, function ($lang){return $lang['current_lang'];});
                            $currentLang = array_values($currentLang)[0]; ?>
                            <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo $currentLang['flag'] ?>" alt="<?php echo $currentLang['name'] ?>" width="16" height="11" style="width: 16px; height: 11px;"> <?php echo $currentLang['name'] ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($languages as $language): ?>
                                <li class="nav-item"><a class="dropdown-item" href="<?php echo $language['url'] ?>"><img src="<?php echo $language['flag'] ?>" alt="<?php echo $language['name'] ?>" width="16" height="11" style="width: 16px; height: 11px;"> <?php echo $language['name'] ?></a></li>

                                <?php endforeach; ?>
                            </ul>
                        </li>

                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>




    </header>
