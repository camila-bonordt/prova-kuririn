<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E1FZLE72PH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-E1FZLE72PH');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-79566551-46"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-79566551-46');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="theme-color" content="#353597" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Readex+Pro:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100;0,200;0,600;1,100;1,200;1,500&display=swap" rel="stylesheet">
    <script src="<?php bloginfo("template_url") ?>/js/radarSlideshow.js"></script>

    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body id="topo">

    <div class="menu-items d-none">
        <a href="https://www.oxigenweb.com.br/a-empresa-oxigenweb/" target="_blank">
            <li>Quem somos</li>
        </a>
        <a href="#ag">
            <li>O2 Learn</li>
        </a>
        <a href="#objetivos">
            <li>Objetivo</li>
        </a>
        <a href="#beneficios">
            <li>Benefícios</li>
        </a>
        <a class="participar-button" href="#form-logo">Quero Participar</a>
    </div>
    <div class="header" data-aos="fade-down" data-aos-duration="300">
        <header>
            <div class="header-content-container container-fluid">
                <div class="header-menu menu-wrapper">
                    <button id="menu-button" type="button">
                        <div class="bars">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                        Menu
                    </button>
                </div>
                <a href="<?= home_url() ?>"><img data-aos="zoom-in" src="<?php bloginfo("template_url") ?>/assets/header-logo.svg" alt=""></a>
                <nav class="d-flex align-items-center">
                    <ul class="menu-desktop">
                        <a href="https://www.oxigenweb.com.br/a-empresa-oxigenweb/" target="_blank">
                            <li data-aos="fade-down" data-aos-duration="1000">
                                <div class="borda"></div>
                                Quem somos
                            </li>
                        </a>
                        <a href="#ag">
                            <li data-aos="fade-down" data-aos-duration="1300">
                                <div class="borda"></div>
                                O2 Learn
                            </li>
                        </a>
                        <a href="#objetivos">
                            <li data-aos="fade-down" data-aos-duration="1500">
                                <div class="borda"></div>
                                Objetivo
                            </li>
                        </a>
                        <a href="#beneficios">
                            <li data-aos="fade-down" data-aos-duration="1700">
                                <div class="borda"></div>
                                Benefícios
                            </li>
                        </a>
                    </ul>
                    <a data-aos="zoom-in" class="participar-button d-none d-lg-block" href="#form-logo">Quero Participar</a>
                </nav>
            </div>
            <div class="header-orange-container container-fluid"></div>
            <div data-aos="fade-down" data-aos-duration="800" class="header-red-container container-fluid"></div>
        </header>
    </div>