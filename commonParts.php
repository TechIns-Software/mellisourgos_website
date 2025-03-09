<?php

function navbar($str='../',$title){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta name="title" content="Κωνσταντίνος Μελισσουργός | Agency Manager">
        <meta name="description" content="Θέλεις να πραγματοποιήσεις τα όνειρα σου μέσω μιας καριέρας σε έναν σταθερό, ασφαλή και συνεχώς αναπτυσσόμενο κλάδο;">
        <meta name="keywords" content="Διευθυντής Γραφείου,  τμήμα πωλήσεων ,Συμμετοχή σε συνέδρια και ταξίδια σε όλο τον κόσμο,Bonus νέων συνεργατών  , Διαχρονικές προμήθειες,Επάγγελμα Ασφαλιστή , Μελισσουργός Κωνσταντίνος , Μελισσουργός ,NN Hellas">
        <meta name="robots" content="index, follow">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="facebook-domain-verification" content="c9xjk3jgav17jr8f4x55xo1bx0w23p" />
        <title>  <?= $title ?>  | Κωνσταντίνος Μελισσουργός </title>
        <link rel="shortcut icon" type="image/x-icon" href="<?= $str ?>assets/images/fav.png">
        <link rel="stylesheet" href="<?= $str ?>assets/css/plugins/swiper.min.css">
        <link rel="stylesheet" href="<?= $str ?>assets/css/plugins/fontawesome-5.css">
        <link rel="stylesheet" href="<?= $str ?>assets/css/plugins/animate.min.css">
        <link rel="stylesheet" href="<?= $str ?>assets/css/plugins/unicons.css">
        <link rel="stylesheet" href="<?= $str ?>assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $str ?>assets/css/style.css?v=7.0">
        <script src="<?= $str ?>assets/js/vendor/jquery.min.js"></script>
        <script src=“https://player.vimeo.com/api/player.js”></script>
        <!-- Meta Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '363405263192808');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=363405263192808&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->
    </head>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HJXYX19CYD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HJXYX19CYD');
    </script>

    <body class="index-seven hr">
    <!-- start header area -->
    <!-- start header area -->
    <header class="header--sticky header-one six">
        <div class="header-top header-top-one bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="left">
                            <p class="left-text"> </p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="right">
                            <div class="mail">
                                <i class="fas fa-envelope"></i>
                                <a href="#">Melissourgoskonstantinos@gmail.com</a>
                            </div>
                            <div class="call">
                                <i class="fas fa-phone-alt"></i>
                                <a href="#">
                                    Τηλ : 210-4138888
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="navbar_logo">
                            <a href="<?= $str ?>index.php">
                                <img class="img-fluid" src="<?= $str ?>assets/images/logo/logo_trans2.png" alt="finbiz-logo">
                            </a>
                        </div>
                    </div>
                    <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="main-header">
                            <nav class="nav-main mainmenu-nav d-none d-xl-block">
                                <ul class="mainmenu">

                                    <li class=""><a class="nav-item <?php echo ($_SESSION['page'] == '1' ? ' active' : ''); ?>  " href="<?= $str ?>">Αρχική</a></li>
                                    <li><a class="nav-item <?php echo ($_SESSION['page'] == '2' ? ' active' : ''); ?>" href="<?= $str ?>about/">Σχετικά με εμένα</a></li>
                                    <li><a class="nav-item <?php echo ($_SESSION['page'] == '3' ? ' active' : ''); ?>" href="<?= $str ?>office/">Γραφεία</a></li>
                                    <li><a class="nav-item <?php echo ($_SESSION['page'] == '4' ? ' active' : ''); ?>" href="<?= $str ?>career/">Καριέρα</a></li>
                                    <li><a class="nav-item <?php echo ($_SESSION['page'] == '5' ? ' active' : ''); ?>" href="<?= $str ?>test/">Εσωστρεφής ή Εξωστρεφής;</a></li>
                                    <li><a class="nav-item <?php echo ($_SESSION['page'] == '6' ? ' active' : ''); ?>" href="<?= $str ?>contact/">Επικοινωνία</a></li>
                                    <li><a class="nav-item <?php echo ($_SESSION['page'] == '7' ? ' active' : ''); ?>" href="<?= $str ?>video/">Βίντεο</a></li>
                                </ul>
                            </nav>
                            <div class="button-area">
                                <div class="search-input-area ">
                                    <div class="container">
                                        <div class="search-input-inner">
                                            <div class="input-div">
                                                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                                                <button><i class="far fa-search"></i></button>
                                            </div>
                                            <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                    <img class="menu-dark" src="<?= $str ?>assets/images/icon/menu.png" alt="Menu-icon">
                                    <img class="menu-light" src="<?= $str ?>assets/images/icon/menu-light.png" alt="Menu-icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header area -->

    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="<?= $str ?>index.php"><img class="logo" src="<?= $str ?>assets/images/logo/logo.svg" alt="melissourgos_logo"></a>

            <div class="body d-none d-xl-block">
                <p class="disc">
                    Μάθε ν’ ακούς. Η ευκαιρία καμιά φορά χτυπάει την πόρτα σου πολύ σιγανά.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Ελα σε επικοινωνία μαζί μας</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">210-4138888</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="#" style="font-size: .9em">Melissourgoskonstantinos@gmail.com</a>
                        </div>
                        <!-- single ENd -->

                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">Λεωφ. Κηφισίας 131</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu">
                        <a href="https://www.facebook.com/Melissourgos.Konstantinos"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.tiktok.com/@melissourgoskostas"><svg class="tiktokSvg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg</style><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg></a>
                        <a href="https://www.instagram.com/melissourgos.k/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/konstantinos-melissourgos/"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="body-mobile d-block d-xl-none">
                <nav class="nav-main mainmenu-nav">
                    <ul class="mainmenu">
                        <li class="menu-item"><a class="menu-link" href="<?= $str ?>index.php">Αρχική</a></li>
<!--                        <li class="menu-item"><a class="menu-link" href="--><?php //= $str ?><!--vision/index.php">Όραμα</a></li>-->
                        <li class="menu-item"><a class="menu-link" href="<?= $str ?>about/index.php">Σχετικά με εμάς</a></li>
                        <li class="menu-item"><a class="menu-link" href="<?= $str ?>office/index.php">Γραφεία</a></li>
                        <li class="menu-item"><a class="menu-link" href="<?= $str ?>career/index.php">Καριέρα</a></li>
<!--                        <li class="menu-item"><a class="menu-link" href="--><?php //= $str ?><!--videos/index.php">Βίντεο</a></li>-->
                        <li><a class="nav-item" href="<?= $str ?>test/index.php">Εσωστρεφής ή Εξωστρεφής;</a></li>
                        <li class="menu-item"><a class="menu-link" href="<?= $str ?>contact/index.php">Επικοινωνία</a></li>
                    </ul>
                </nav>
                <div class="social-wrapper-two menu mobile-menu">
                    <a href="https://www.facebook.com/Melissourgos.Konstantinos"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.tiktok.com/@melissourgoskostas"><svg class="tiktokSvg2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg</style><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg></a>
                    <a href="https://www.instagram.com/melissourgos.k/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/konstantinos-melissourgos/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>

    <div id="anywhere-home"></div>
    <!-- ENd Header Area -->
<?php
}

function footer($str){
    ?>
    <!-- start footer area -->
    <!-- rts footer area start -->
    <div class="rts-footer-area footer-one  bg-footer-one">
        <div class="container bg-shape-f1">
            <!-- footer call to action area -->
            <!-- footer call to action area End -->
            <!-- rts footer area -->
            <div class="row pt--120 pt_sm--80 pb--80 pb_sm--40">
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized seven">
                        <div class="wized-title">
                            <h5 class="title">Μενού</h5>

                        </div>
                        <div class="quick-link-inner">
                            <ul class="links">
                                <li><a href="<?= $str ?>index.php"><i class="far fa-arrow-right"></i> Αρχική</a></li>
<!--                                <li><a href="--><?php //= $str ?><!--vision/index.php"><i class="far fa-arrow-right"></i> Όραμα</a></li>-->
                                <li><a href="<?= $str ?>about/index.php"><i class="far fa-arrow-right"></i> Σχετικά με εμένα</a></li>
                                <li><a href="<?= $str ?>office/index.php"><i class="far fa-arrow-right"></i> Γραφεία</a></li>

                            </ul>
                            <ul class="links margin-left-70">
                                <li><a href="<?= $str ?>career/index.php"><i class="far fa-arrow-right"></i>  Καριέρα</a></li>
<!--                                <li><a href="--><?php //= $str ?><!--videos/index.php"><i class="far fa-arrow-right"></i> Βίντεο</a></li>-->

                                <li><a href="<?= $str ?>test/index.php"><i class="far fa-arrow-right"></i> Εσωστρεφής ή Εξωστρεφής;</a></li>
                                <li><a href="<?= $str ?>contact/index.php"><i class="far fa-arrow-right"></i> Επικοινωνία</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer mid area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized mid-bg">
                        <div class="wized-title">
                            <h5 class="title">Ωρες Λειτουργίας</h5>
                            <img src="<?= $str ?>assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="opening-time-inner">
                            <div class="single-opening">
                                <p class="day">Δευτ. - Παρ. </p>
                                <p class="time">09:00 - 20:00</p>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- footer mid area end -->

                <!-- footer end area post -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized seven margin-left-65">
                        <div class="wized-title">
                            <h5 class="title">Βρείτε μας εδώ</h5>
                            <img src="<?= $str ?>assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="get-in-touch">

                            <div class="wrapper">
                                <!-- single -->
                                <div class="single">
                                    <span>  Τηλ Επικοινωνίας:</span>
                                    <a href="#">210-4138888</a>
                                </div>
                                <!-- single ENd -->
                                <!-- single -->
                                <div class="single">
                                    <span>  Email:</span>
                                    <a href="#" style="font-size: .9em">Melissourgoskonstantinos@gmail.com</a>
                                </div>
                                <!-- single ENd -->

                                <!-- single -->
                                <div class="single">
                                    <span>  Διεύθυνση:</span>
                                    <a target="_blank" href="https://www.google.com/maps?q=%CE%9B%CE%B5%CF%89%CF%86.+%CE%9A%CE%B7%CF%86%CE%B9%CF%83%CE%AF%CE%B1%CF%82+131,+15124,%CE%9C%CE%B1%CF%81%CE%BF%CF%8D%CF%83%CE%B9">Λεωφ. Κηφισίας 131 Μαρούσι </a>
                                </div>
                                <!-- single ENd -->
                            </div>
                            <div class="social-wrapper-two menu">
                                <a href="https://www.facebook.com/Melissourgos.Konstantinos"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@melissourgoskostas"><svg class="tiktokSvg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg</style><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg></a>
                                <a href="https://www.instagram.com/melissourgos.k/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/konstantinos-melissourgos/"><i class="fab fa-linkedin"></i></a>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- footer end area post end-->
            </div>
            <!-- rts footer area End -->
        </div>
        <!-- copyright area start -->
        <div class="rts-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <p> <a target="_blank" href="https://techins.gr/"> TechIns </a> - Copyright <script>document.write(new Date().getFullYear()); </script>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>
    <!-- rts footer area end -->
    <!-- ENd footer Area -->

    <!-- start loader -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End loader -->

    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- progress Back to top End -->
    <!-- scripts start form hear -->

    <div class="modal-overlay   " id="modalContainer2">
        <div class="custom-modal">
            <div class="mainWelcome ">

                <div class="welcomeCard2 ">
                    <div class="d-flex justify-content-end">
                        <div>
                            <button onclick="removeModal(1)" class="closeBtn"><i class="fas fa-times fs-2"></i></button>
                        </div>
                    </div>
                        <h3>Ευχαριστούμε πολύ που συμπλήρωσες την φόρμα !</h3>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= $str ?>assets/js/vendor/jqueryui.js"></script>
    <script src="<?= $str ?>assets/js/vendor/waypoint.js"></script>
    <script src="<?= $str ?>assets/js/plugins/swiper.js"></script>
    <script src="<?= $str ?>assets/js/plugins/counterup.js"></script>
    <script src="<?= $str ?>assets/js/plugins/sal.min.js"></script>
    <script src="<?= $str ?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?= $str ?>assets/js/plugins/contact.form.js"></script>
    <!-- main Js -->
    <script src="<?= $str ?>assets/js/main.js?v=3.1"></script>
    <!-- scripts end form hear -->
    </body>

    </html>

    <?php
}

