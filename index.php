<?php
    session_start();
    if(isset($_SESSION['messegeSended'])) {
        if($_SESSION['messegeSended'] == "true" || $_SESSION['messegeSended'] == "false") {
            $messageSended = $_SESSION['messegeSended'];
            unset($_SESSION['messegeSended']);
        }
    }
    if(isset($_SESSION['inputError'])) {
        $inputError = $_SESSION['inputError'];
        unset($_SESSION['inputError']);
    }
    session_destroy();
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-Ua-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Firma zajmująca się dźwigami wysokiej klasy">
        <meta name="keywords" content="widny, winda, schody, shody, ruchome, ruhome, chodniki, hodniki, dźwig, dźwigi, platforma, platformy">
        <meta name="author" content="Hania Potępa">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <title>LiftKatowice | Główna</title>
    </head>
    <body onload="siteLoaded()">
        <div class="bg-preloader" id="preloader">
            <div class="loader-wrapper">
                <div class="animation"></div>
                <div class="text-wrapper">
                    <p class="loader-text">Trwa ładowanie strony...</p>
                </div>
            </div>
        </div>
        <header class="sticky-top" id="header" style="display:none;">
            <nav class="navbar bg-own-lightgray navbar-light navbar-expand-lg">
                <a class="navbar-brand p-0 ms-2" href="#">
                    <img src="assets/img/logo.png" class="align-bottom p-0" width="132"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-main-menu" aria-controls="nav-main-menu" aria-expanded="false" aria-label="Przełącznik nawigacyjny">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav-main-menu">
                    <ul class="navbar-nav ms-2 ms-lg-auto me-2">
                        <li class="nav-item">
                            <a class="nav-link active ms-lg-1" href="#">Główna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-lg-1" href="#about">O firmie</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="nav-submenu-1" aria-haspopup="true" href="#offer">Oferta</a>
                            <div class="dropdown-menu" aria-labelledby="nav-submenu-1">
                                <a class="dropdown-item" href="offers/lifts.php">Windy</a>
                                <a class="dropdown-item" href="offers/stairs.php">Schody i chodniki ruchome</a>
                                <a class="dropdown-item" href="offers/platforms.php">Platformy dla osób niepełnosprawych</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-lg-1" href="#projects">Realizacje</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="nav-submenu-2" aria-haspopup="true" href="#">Wytyczne dla urządzeń</a>
                            <div class="dropdown-menu edge" aria-labelledby="nav-submenu-2">
                                <a class="dropdown-item" href="guidelines/lift.php">Windy</a>
                                <a class="dropdown-item" href="guidelines/stairs.php">Schody i chodniki ruchome</a>
                                <a class="dropdown-item" href="guidelines/platforms.php">Platformy</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-lg-1" href="#contact">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="contact-form-alert-wrapper">
            <div class="contact-form-alert-completed" id="contact-form-alert-completed">
                <p>Formularz został wysłany</p>
            </div>
            <div class="contact-form-alert-failed"id="contact-form-alert-failed">
                <p>Formularz nie został wysłany</p>
            </div>
        </div>
        <main class="index" id="main">
            <div class="slide-down-container">
                <div class="icon-placeholder"></div>
                <a class="slide-down-href" href="#about">
                    <div class="text-wrapper">
                        <p class="slide-down-text">Zjedź na dół</p>
                    </div>
                    <i class="bi bi-arrow-down-circle text-white"></i>
                </a>
            </div>
            <section class="about p-4" id="about">
                <div class="container-fluid">
                    <div class="row no-gutters bg-white">
                        <div class="col-12 col-xl-5 bg-white">
                            <h1 class="about-h1 ms-3 mt-3">O firmie</h1>
                            <div class="about-hor-line ms-3 mb-3"></div>
                            <p class="about-p ms-3">» Lift Katowice działa na rynku od 1991 roku. Firma jest oparta tylko i wyłącznie na polskim kapitale. Oferujemy dźwigi bardzo wysokiej jakości oparte na komponentach tylko i wyłącznie renomowanych producentów mających bardzo ugruntowaną pozycję.</p>
                            <p class="about-p ms-3">» Obecnie firma zatrudnia 30 pracowników na umowę o pracę. Załoga jest oparta na wykwalifikowanych montażystach, konserwatorach oraz pracownikach umysłowych.</p>
                            <p class="about-p ms-3">» Każdy dźwig jest traktowany jako oddzielny projekt, dzięki czemu jesteśmy w stanie wykonać prawie każdy dźwig i dopasować go do istniejącego szybu.</p>
                            <p class="about-p ms-3">» Nasza firma posiada uprawnienia do wytwarzania dźwigów, wytwarzanie w zakresie montażu dźwigów oraz do modernizacji dźwigów wydane przez Urząd Dozoru Technicznego.</p>
                            <p class="about-p ms-3">» W swojej ofercie posiadamy również inne urządzenia transportu bliskiego takie jak:
                                <br /> - schody i chodniki ruchome
                                <br /> - dźwigi towarowe małe bez możliwości przewozu osób
                                <br /> - platformy pionowe dla osób niepełnosprawnych montowane w szybie
                                <br /> - platformy pionowe nie wymagające szybu
                                <br /> - platformy przyschodowe
                            </p>
                        </div>
                        <div class="col-12 col-xl-7 p-0 bg-white">
                            <img class="w-100 float-end align-self-center" src="assets/img/about.png"/>
                        </div>
                    </div>
                </div>
            </section>
            <section class="offer p-4 mt-2" id="offer">
                <div class="text-line-wrapper mt-3">
                    <h1 class="offer-h1">OFERTA</h1>
                    <div class="offer-hor-line mb-3"></div>
                </div>
                <div class="item-wrapper">
                    <div class="container">
                        <div class="row bg-white">
                            <div class="col-12 col-lg-4">
                                <div class="offer-item">
                                    <a class="offer-a" href="offers/lifts.php">
                                        <div class="offer-img-wrapper">
                                            <img src="assets/img/offers/first.png" />
                                        </div>
                                        <div class="offer-text-wrapper">
                                            <div class="offer-text-margin">
                                                <span class="offer-span">Windy osobowe, towarowo-osobowe i towarowe</span>
                                                <p class="offer-p">Nasza firma oferuje windy o udźwigu od 50 kg do 15000 kg.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mt-3 mt-lg-0">
                                <div class="offer-item">
                                    <a class="offer-a" href="offers/stairs.php">
                                        <div class="offer-img-wrapper">
                                            <img src="assets/img/offers/second.png" />
                                        </div>
                                        <div class="offer-text-wrapper">
                                            <div class="offer-text-margin">
                                                <span class="offer-span">Schody ruchome i chodniki ruchome</span>
                                                <p class="offer-p">Oferujemy schody i chodniki ruchome o wysokości podnoszenia od 0,5 m do do 40 m. Urządzenia oferujemy zarówno w wersjach budżetowych jak i w PREMIUM.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mt-3 mt-lg-0">
                                <div class="offer-item">
                                    <a class="offer-a" href="offers/platforms.php">
                                        <div class="offer-img-wrapper">
                                            <img src="assets/img/offers/third.png" />
                                        </div>
                                        <div class="offer-text-wrapper">
                                            <div class="offer-text-margin">
                                                <span class="offer-span">Platformy dla osób niepełnosprawnych</span>
                                                <p class="offer-p">W naszej ofercie możecie Państwo znaleźć platformy wolnostące nie wymagające szybu, platformy montowane w szybie murowanym oraz platformy w konstrukcji samonośnej.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="projects p-4 mt-2" id="projects">
                <div class="projects-first-section" id="projects-first-section">
                    <div class="projects-section">
                        <div class="text-line-wrapper">
                            <h1 class="projects-h1">PROJEKTY 2017</h1>
                            <div class="projects-hor-line"></div>
                        </div>
                        <div class="projects-min-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2017/1.php">
                                                <img src="assets/img/projects/2017-1.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-sm-0">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2017/2.php">
                                                <img src="assets/img/projects/2017-2.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-lg-0">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2017/3.php">
                                                <img src="assets/img/projects/2017-3.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-lg-0">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2017/4.php">
                                                <img src="assets/img/projects/2017-4.png" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projects-section">
                        <div class="text-line-wrapper">
                            <h1 class="projects-h1">PROJEKTY 2018</h1>
                            <div class="projects-hor-line"></div>
                        </div>
                        <div class="projects-min-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2018/1.php">
                                                <img src="assets/img/projects/2018-1.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-sm-0">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2018/2.php">
                                                <img src="assets/img/projects/2018-2.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-lg-0">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2018/3.php">
                                                <img src="assets/img/projects/2018-3.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-lg-0">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2018/4.php">
                                                <img src="assets/img/projects/2018-4.png" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projects-second-section" id="projects-second-section">
                    <div class="projects-section">
                        <div class="text-line-wrapper">
                            <h1 class="projects-h1">PROJEKTY 2019</h1>
                            <div class="projects-hor-line"></div>
                        </div>
                        <div class="projects-min-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2019/1.php">
                                                <img src="assets/img/projects/2019-1.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-sm-0">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2019/2.php">
                                                <img src="assets/img/projects/2019-2.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-lg-0">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2019/3.php">
                                                <img src="assets/img/projects/2019-3.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-lg-0">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2019/4.php">
                                                <img src="assets/img/projects/2019-4.png" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projects-section">
                        <div class="text-line-wrapper">
                            <h1 class="projects-h1">PROJEKTY 2020</h1>
                            <div class="projects-hor-line"></div>
                        </div>
                        <div class="projects-min-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2020/1.php">
                                                <img src="assets/img/projects/2020-1.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-sm-0">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2020/2.php">
                                                <img src="assets/img/projects/2020-2.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-lg-0">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2020/3.php">
                                                <img src="assets/img/projects/2020-3.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-lg-0">
                                        <div class="projects-item">
                                            <a class="projects-a" href="projects/2020/4.php">
                                                <img src="assets/img/projects/2020-4.png" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projects-show-buttons mt-3">
                    <button class="projects-show-more-btn" id="projects-show-more-button" type="button" onclick="projectsShowMore()">
                        <i>Pokaż Więcej</i>
                    </button>
                    <button class="projects-show-less-btn" id="projects-show-less-button" type="button" onclick="projectsShowLess()">
                        <i>Pokaż mniej</i>
                    </button>
                </div>
            </section>
            <section class="clients p-4 mt-2" id="clients">
                <div class="text-line-wrapper mt-3">
                    <h1 class="clients-h1">Klienci</h1>
                    <div class="clients-hor-line"></div>
                </div>
                <div class="clients-wrapper mt-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="clients-item">
                                    <a class="clients-a" href="https://www.skanska.pl">
                                        <img class="w-100" src="assets/img/clients/skanska.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-sm-0">
                                <div class="clients-item">
                                    <a class="clients-a" href="https://www.henkel.pl">
                                        <img class="w-100" src="assets/img/clients/henkel.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-lg-0">
                                <div class="clients-item">
                                    <a class="clients-a" href="https://www.agatameble.pl">
                                        <img class="w-100" src="assets/img/clients/agata.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-3 mt-lg-0">
                                <div class="clients-item">
                                    <a class="clients-a" href="https://www.leroymerlin.pl">
                                        <img class="w-100" src="assets/img/clients/leroy-merlin.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact p-4 mt-2" id="contact">
                <div class="text-line-wrapper mt-3">
                    <h1 class="contact-h1">Kontakt</h1>
                    <div class="contact-hor-line-main"></div>
                </div>
                <div class="contact-sections-wrapper mt-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-lg-6 p-0 pe-lg-2">
                                <div class="contact-first-section p-3">
                                    <div class="text-line-wrapper">
                                        <h1 class="contact-first-h1">Formularz kontaktowy</h1>
                                        <div class="contact-hor-line-first"></div>
                                        <form class="contact-form mt-3" id="contact-form" action="includes/mail/contact.php" method="post">
                                            <div class="contact-form-type-choose">
                                                <div class="contact-form-first">
                                                    <div class="container-fluid p-1">
                                                        <div class="contact-form-text">
                                                            <h4 class="contact-form-h4">Typ urządzenia:</h4>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 col-xl-3">
                                                                <input class="contact-form-input-radio" onclick="showLiftFun()" type="radio" id="showLift" name="device-type" value="lift" checked />
                                                                <label class="contact-form-label" for="showLift">Winda</label>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-xl-3 mt-1 mt-md-0">
                                                                <input class="contact-form-input-radio" onclick="showPlatformFun()" type="radio" id="showPlatform" name="device-type" value="platform" />
                                                                <label class="contact-form-label" for="showPlatform">Platforma</label>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-xl-3 mt-1 mt-xl-0">
                                                                <input class="contact-form-input-radio" onclick="showStairsFun()" type="radio" id="showStairs" name="device-type" value="stairs" />
                                                                <label class="contact-form-label" for="showStairs">Schody ruch.</label>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-xl-3 mt-1 mt-xl-0">
                                                                <input class="contact-form-input-radio" onclick="showPavementFun()" type="radio" id="showPavement" name="device-type" value="pavement" />
                                                                <label class="contact-form-label" for="showPavement">Chodnik ruch.</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-form-types">
                                                <div class="contact-form-type-lift" id="contact-form-type-lift">
                                                    <div class="contact-form-second mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Typ Windy:</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-lg-4">
                                                                    <input class="contact-form-input-radio" type="radio" id="osobowa" name="lift-type" value="osobowa" />
                                                                    <label class="contact-form-label" for="osobowa">Osobowa</label>
                                                                </div>
                                                                <div class="col-12 col-lg-4 mt-1 mt-lg-0">
                                                                    <input class="contact-form-input-radio" type="radio" id="towarowa" name="lift-type" value="towarowa" />
                                                                    <label class="contact-form-label" for="towarowa">Towarowa</label>
                                                                </div>
                                                                <div class="col-12 col-lg-4 mt-1 mt-lg-0">
                                                                    <input class="contact-form-input-radio" type="radio" id="towarowa-mala" name="lift-type" value="towarowa-mala" />
                                                                    <label class="contact-form-label" for="towarowa-mala">Tow. (mała)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-first mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Udźwig (kg):</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 text-start">
                                                                    <button class="contact-add-remove-btn minus-liftcapacity" type="button">-</button>
                                                                    <input class="contact-form-input-number" type="text" id="liftcapacityid" name="liftcapacity" value="100" />
                                                                    <button class="contact-add-remove-btn plus-liftcapacity" type="button">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-second mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Napęd:</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <input class="contact-form-input-radio" type="radio" onclick="lineEngineFun()" id="linowy" name="engine-type" value="linowy" checked/>
                                                                    <label class="contact-form-label" for="linowy">Linowy</label>
                                                                </div>
                                                                <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                                                    <input class="contact-form-input-radio" type="radio" onclick="hydraulicEngineFun()" id="hydrauliczny" name="engine-type" value="hydrauliczny" />
                                                                    <label class="contact-form-label" for="hydrauliczny">Hydrauliczny</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-first mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Wymiary szybu (mm):</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-lg-4">
                                                                    <input class="contact-form-input-text" type="text" id="contact-form-input-selfset-1" name="contact-form-input-selfset-1" placeholder="Wysokość podnoszenia" />
                                                                </div>
                                                                <div class="col-12 col-lg-4 mt-1 mt-lg-0">
                                                                    <input class="contact-form-input-text" type="text" id="contact-form-input-selfset-2" name="contact-form-input-selfset-2" placeholder="Szerokość" />
                                                                </div>
                                                                <div class="col-12 col-lg-4 mt-1 mt-lg-0">
                                                                    <input class="contact-form-input-text" type="text" id="contact-form-input-selfset-3" name="contact-form-input-selfset-3" placeholder="Głębokość" />
                                                                </div>
                                                                <div class="col-12 m-0 p-0">
                                                                    <p class="contact-form-dimensions-p">lub wybierz udźwig</p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <select class="contact-form-dimensions-select" id="contact-form-dimensions-electric" name="contact-form-dimensions-electric" onchange="liftDimChangeCapacityFun(this)">
                                                                        <option value="other" selected>Inne (wpisz wymiary powyżej)</option>
                                                                        <option value="1">630kg/8 osób // Szyb: 1650x1800 // Kabina: 1100x1400</option>
                                                                        <option value="2">800kg/10 osób // Szyb: 1650x2000 // Kabina: 1100x1600</option>
                                                                        <option value="3">1000kg/13 osób // Szyb: 1650x2500 // Kabina: 1100x2100</option>
                                                                        <option value="4">1125kg/15 osób // Szyb: 1750x2500 // Kabina: 1200x2100</option>
                                                                        <option value="5">1600kg/21 osób // Szyb: 2200x2800 // Kabina: 1400x2400</option>
                                                                        <option value="6">2000kg/26 osób // Szyb: 2300x3100 // Kabina: 1500x2700</option>
                                                                    </select>
                                                                    <select class="contact-form-dimensions-select" id="contact-form-dimensions-hydraulic" name="contact-form-dimensions-hydraulic" onchange="liftDimChangeCapacityFun(this)">
                                                                        <option value="other" selected>Inne (wpisz wymiary powyżej)</option>
                                                                        <option value="1">630kg/8 osób // Szyb: 1650x1800 // Kabina: 1100x1400</option>
                                                                        <option value="2">800kg/10 osób // Szyb: 1650x2000 // Kabina: 1100x1600</option>
                                                                        <option value="3">1000kg/13 osób // Szyb: 1650x2500 // Kabina: 1100x2100</option>
                                                                        <option value="4">1125kg/15 osób // Szyb: 1750x2500 // Kabina: 1200x2100</option>
                                                                        <option value="5">1600kg/21 osób // Szyb: 2200x2800 // Kabina: 1400x2400</option>
                                                                        <option value="6">2000kg/26 osób // Szyb: 2500x3100 // Kabina: 1500x2700</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-second mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Liczba przystanków:</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 text-start">
                                                                    <button class="contact-add-remove-btn minus-liftStops" type="button">-</button>
                                                                    <input class="contact-form-input-number" type="text" id="liftstopid" name="liftstops" value="2" />
                                                                    <button class="contact-add-remove-btn plus-liftStops" type="button">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-first mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Wykończenie kabiny:</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-xl-4">
                                                                    <input class="contact-form-input-radio" type="radio" id="painted-plate" name="finishing-cabine" value="painted-plate" />
                                                                    <label class="contact-form-label" for="painted-plate">Blacha malowana</label>
                                                                </div>
                                                                <div class="col-12 col-xl-4 mt-1 mt-xl-0">
                                                                    <input class="contact-form-input-radio" type="radio" id="stainless-steel" name="finishing-cabine" value="stainless-steel" />
                                                                    <label class="contact-form-label" for="stainless-steel">Stal nierdzewna</label>
                                                                </div>
                                                                <div class="col-12 col-xl-4 mt-1 mt-xl-0">
                                                                    <input class="contact-form-input-radio" type="radio" id="laminate" name="finishing-cabine" value="laminate" />
                                                                    <label class="contact-form-label" for="laminate">Laminat</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-second mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Wykończenie drzwi:</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <input class="contact-form-input-radio" type="radio" id="painted-plate-door" name="finishing-door" value="painted-plate-door"/>
                                                                    <label class="contact-form-label" for="painted-plate-door">Blacha malowana</label>
                                                                </div>
                                                                <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                                                    <input class="contact-form-input-radio" type="radio" id="stainless-steel-door" name="finishing-door" value="stainless-steel-door" />
                                                                    <label class="contact-form-label" for="stainless-steel-door">Stal nierdzewna</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-first mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Dodatkowe informacje (opcjonalne):</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <textarea class="contact-form-textarea" id="contact-form-textarea-id" name="contact-form-textarea" placeholder="Dodatkowe informacje/uwagi (opcjonalne)"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contact-form-type-platforms" id="contact-form-type-platforms">
                                                    <div class="contact-form-second mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Udźwig (kg):</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 text-start">
                                                                    <button class="contact-add-remove-btn minus-platformcapacity" type="button">-</button>
                                                                    <input class="contact-form-input-number" type="text" id="platformcapacityid" name="platformcapacity" value="100" />
                                                                    <button class="contact-add-remove-btn plus-platformcapacity" type="button">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-first mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Napęd:</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <input class="contact-form-input-radio" type="radio" onclick="platformHydraulicEngineFun()" id="hydraulic" name="engine-type-platform" value="hydraulic" checked/>
                                                                    <label class="contact-form-label" for="hydraulic">Hydrauliczny</label>
                                                                </div>
                                                                <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                                                    <input class="contact-form-input-radio" type="radio" onclick="platformScrewEngineFun()" id="screw" name="engine-type-platform" value="screw" />
                                                                    <label class="contact-form-label" for="screw">Śrubowy</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-second mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Szyb:</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6" id="platformShaft-1">
                                                                    <input class="contact-form-input-radio" type="radio" id="concrete" name="shaft" value="concrete" checked/>
                                                                    <label class="contact-form-label" for="concrete">Żelbetowy</label>
                                                                </div>
                                                                <div class="col-12 col-sm-6 mt-1 mt-sm-0" id="platformShaft-2">
                                                                    <input class="contact-form-input-radio" type="radio" id="steel" name="shaft" value="steel" />
                                                                    <label class="contact-form-label" for="steel">Stalowy</label>
                                                                </div>
                                                                <div class="col-12" id="platformShaft-3">
                                                                    <input class="contact-form-input-radio" type="radio" id="without" name="shaft" value="without" />
                                                                    <label class="contact-form-label" for="without">Brak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-first mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Wymiary szybu (mm):</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-lg-4">
                                                                    <input class="contact-form-input-text" type="text" id="contact-form-input-selfset-1-platform" name="contact-form-input-selfset-1-platform" placeholder="Wysokość podnoszenia" />
                                                                </div>
                                                                <div class="col-12 col-lg-4 mt-1 mt-lg-0">
                                                                    <input class="contact-form-input-text" type="text" id="contact-form-input-selfset-2-platform" name="contact-form-input-selfset-2-platform" placeholder="Szerokość" />
                                                                </div>
                                                                <div class="col-12 col-lg-4 mt-1 mt-lg-0">
                                                                    <input class="contact-form-input-text" type="text" id="contact-form-input-selfset-3-platform" name="contact-form-input-selfset-3-platform" placeholder="Głębokość" />
                                                                </div>
                                                                <div class="col-12 m-0 p-0">
                                                                    <p class="contact-form-dimensions-p">lub wybierz udźwig</p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <select class="contact-form-dimensions-select" id="contact-form-dimensions-hydraulic-platform" name="contact-form-dimensions-hydraulic-platform" onchange="platformDimChangeCapacityFun(this)">
                                                                        <option value="other" selected>Inne (wpisz wymiary powyżej)</option>
                                                                        <option value="1">400kg/5 osób // Szyb: 1450x1560 // Kabina: 1100x1400</option>
                                                                        <option value="2">400kg/5 osób // Szyb: 1150x1560 // Kabina: 880x1200</option>
                                                                    </select>
                                                                    <select class="contact-form-dimensions-select" id="contact-form-dimensions-screw-platform" name="contact-form-dimensions-screw-platform" onchange="platformDimChangeCapacityFun(this)">
                                                                        <option value="other" selected>Inne (wpisz wymiary powyżej)</option>
                                                                        <option value="3">300kg // Szyb: 1310x1520 // Kabina: 900x1400</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-second mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Liczba przystanków:</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 text-start">
                                                                    <button class="contact-add-remove-btn minus-platformStops" type="button">-</button>
                                                                    <input class="contact-form-input-number" type="text" id="platformstopid" name="platformstops" value="2" />
                                                                    <button class="contact-add-remove-btn plus-platformStops" type="button">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-first mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Wykończenie kabiny:</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-xl-4">
                                                                    <input class="contact-form-input-radio" type="radio" id="painted-plate-platform" name="finishing-cabine-platform" value="painted-plate" />
                                                                    <label class="contact-form-label" for="painted-plate-platform">Blacha malowana</label>
                                                                </div>
                                                                <div class="col-12 col-xl-4 mt-1 mt-xl-0">
                                                                    <input class="contact-form-input-radio" type="radio" id="stainless-steel-platform" name="finishing-cabine-platform" value="stainless-steel" />
                                                                    <label class="contact-form-label" for="stainless-steel-platform">Stal nierdzewna</label>
                                                                </div>
                                                                <div class="col-12 col-xl-4 mt-1 mt-xl-0">
                                                                    <input class="contact-form-input-radio" type="radio" id="laminate-platform" name="finishing-cabine-platform" value="laminate" />
                                                                    <label class="contact-form-label" for="laminate-platform">Laminat</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-second mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Wykończenie drzwi:</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <input class="contact-form-input-radio" type="radio" id="painted-plate-door-platform" name="finishing-door-platform" value="painted-plate-door"/>
                                                                    <label class="contact-form-label" for="painted-plate-door-platform">Blacha malowana</label>
                                                                </div>
                                                                <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                                                    <input class="contact-form-input-radio" type="radio" id="stainless-steel-door-platform" name="finishing-door-platform" value="stainless-steel-door" />
                                                                    <label class="contact-form-label" for="stainless-steel-door-platform">Stal nierdzewna</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-first mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Dodatkowe informacje (opcjonalne):</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <textarea class="contact-form-textarea" id="contact-form-textarea-id" name="contact-form-textarea-platform" placeholder="Dodatkowe informacje/uwagi (opcjonalne)"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contact-form-type-stairs" id="contact-form-type-stairs">
                                                    <div class="contact-form-second mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Nachylenie:</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <input class="contact-form-input-radio" type="radio" id="stairs-30" name="stairs-tilt" value="30" />
                                                                    <label class="contact-form-label" for="stairs-30">30º</label>
                                                                </div>
                                                                <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                                                    <input class="contact-form-input-radio" type="radio" id="stairs-35" name="stairs-tilt" value="35" />
                                                                    <label class="contact-form-label" for="stairs-35">35º</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-first mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Wysokość podnoszenia (cm):</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <input class="contact-form-input-text text-start ps-1" type="text" id="raising" name="stairs-raising" placeholder="Wysokość podnoszenia" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contact-form-type-pavements" id="contact-form-type-pavements">
                                                    <div class="contact-form-second mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Nachylenie:</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <input class="contact-form-input-radio" type="radio" id="pavement-0" name="pavement-tilt" value="0" />
                                                                    <label class="contact-form-label" for="pavement-0">0º</label>
                                                                </div>
                                                                <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                                                    <input class="contact-form-input-radio" type="radio" id="pavement-12" name="pavement-tilt" value="12" />
                                                                    <label class="contact-form-label" for="pavement-12">12º</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-form-first mt-2">
                                                        <div class="container-fluid p-1">
                                                            <div class="contact-form-text">
                                                                <h4 class="contact-form-h4">Wysokość podnoszenia (cm):</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <input class="contact-form-input-text text-start ps-1" type="text" id="raising" name="pavement-raising" placeholder="Wysokość podnoszenia" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-form-personaldata mt-2">
                                                <div class="contact-form-second">
                                                    <div class="container-fluid p-1">
                                                        <div class="contact-form-text">
                                                            <h4 class="contact-form-h4">Kontakt:</h4>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6">
                                                                <input class="contact-form-input-text text-start ps-1" type="text" id="contact-form-name" name="contact-form-name" placeholder="Imię"/>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-1 mt-md-0">
                                                                <input class="contact-form-input-text text-start ps-1" type="text" id="contact-form-surname" name="contact-form-surname" placeholder="Nazwisko"/>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-1">
                                                                <input class="contact-form-input-text text-start ps-1" type="text" id="contact-form-phone" name="contact-form-phone" placeholder="Nr. Telefonu (xxxxxxxxx)"/>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-1">
                                                                <input class="contact-form-input-text text-start ps-1" type="text" id="contact-form-email" name="contact-form-email" placeholder="E-mail"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-form-button-wrapper mt-3">
                                                <button class="contact-form-submit-btn" type="submit" value="Submit" form="contact-form" title="Wyślij formularz">Wyślij</button>
                                            </div>
                                            <div class="contact-form-error">
                                                <?php if(isset($inputError)) { if($inputError == "notAll") { ?>
                                                <p>Musisz podać wszystkie dane (oprócz opcjonalnych)</p>
                                                <?php } else if($inputError == "mustNumber") { ?>
                                                <p>Liczba przystanków, udźwig, wymiary i wysokość podnoszenia muszą być liczbą</p>
                                                <?php } else if($inputError == "invalidEmail") { ?>
                                                <p>Email jest nieprawidłowy</p>
                                                <?php } else if($inputError == "invalidPhone") { ?>
                                                <p>Nr. telefonu jest nieprawidłowy</p>
                                                <?php } unset($inputError); } ?>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 p-0 ps-lg-2 mt-3 mt-lg-0">
                                <div class="contact-second-section p-3 text-start text-lg-end">
                                    <div class="contact-second-item">
                                        <h1 class="contact-second-h1">Siedziba firmy</h1>
                                        <div class="contact-hor-line-second ms-0 ms-lg-auto"></div>
                                        <p class="contact-second-p mt-2">
                                            LIFT KATOWICE Sp. z o. o.
                                            <br /> ul. Spacerowa 20
                                            <br /> 42-512 Sarnów
                                            <br />
                                            <br /> Tel: <a class="contact-second-href" href="tel:+48323533119">+48 32 353 31 19 (20)</a>
                                            <br /> E-mail: <a class="contact-second-href" href="mailto:patryk@liftkatowice.com">patryk@liftkatowice.com</a>
                                        </p>
                                    </div>
                                    <div class="contact-second-item mt-5">
                                        <h1 class="contact-second-h1">Biuro</h1>
                                        <div class="contact-hor-line-second ms-0 ms-lg-auto"></div>
                                        <p class="contact-second-p mt-2">
                                            LIFT KATOWICE Sp. z o. o.
                                            <br /> ul. Pod Młynem 1B
                                            <br /> 40-310 Katowice
                                            <br />
                                            <br /> Tel: <a class="contact-second-href" href="tel:+48323533119">+48 32 353 31 19 (20)</a>
                                            <br /> E-mail: <a class="contact-second-href" href="mailto:patryk@liftkatowice.com">patryk@liftkatowice.com</a>
                                        </p>
                                    </div>
                                    <div class="contact-second-button-wrapper mt-5">
                                        <button class="contact-second-button p-3" id="contact-second-btn" role="button" onclick="window.location.href='assets/pdf/privacy.pdf'" title="Wyświetl politykę prywatności">Polityka Prywatności</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer mt-2" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="p-0 mt-2 mb-2 ms-2 ms-lg-0">Copyright @2021 LiftKatowice.com</p>
                    </div>
                    <div class="col-12 col-md-6 text-start text-md-end">
                        <p class="p-0 mt-2 mb-2 ms-2 ms-lg-0">Strona stworzona przez <a class="footer-a" href="https://www.facebook.com/luiqiana">Karol Potępa</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="assets/js/showmore.js"></script>
    <script src="assets/js/form/index/counter.js"></script>
    <script src="assets/js/form/index/dimensions.js"></script>
    <script src="assets/js/form/index/type.js"></script>
    <script src="assets/js/form/index/shaft.js"></script>
    <?php  if(isset($messageSended)) { if($messageSended == "true") { ?>
        <script>
            formSended = document.getElementById("contact-form-alert-completed");

            formSended.style.display = "block";
            setTimeout(() => {
                formSended.style.display = "none";
            }, 3000);
        </script>
    <?php } else if($messageSended == "false") { ?>
        <script>
            formNotSended = document.getElementById("contact-form-alert-failed");

            formNotSended.style.display = "block";
            setTimeout(() => {
                formSended.style.display = "none";
            }, 3000);
        </script>
    <?php } unset($messageSended); } ?>
</html>