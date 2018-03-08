<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!--author -->
        <meta name="author" content="Nebojsa Konstantinovic">
        <meta name="description" content="Zavrsni projekat">
        <meta name="keywords" content="zavrsni, projekat, frontend">
        <title>Zavrsni projekat</title>

        <!--fav icon -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

        <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
        <!--Font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>

    <body class="light-blue">

        <!-- navigation starts -->
        <nav class="menu">
            <ul class="side-menu list-unstyled">
              <?php
                $top_menu = wp_get_nav_menu_items ('main-menu');

                foreach ($top_menu as $menu) {
                  ?>
                  <li><a href="<?php echo $menu->url; ?>"><?php echo $menu->title; ?></a></li>
                <?php     } ?>
            </ul>
            <span class="fa fa-close"></span>
        </nav>
        <div class="menu-overlay">

        </div>
        <!-- navigation ends -->

        <div class="container">

            <div class="row">
                <!-- uvek isto -->
                <div class="col-lg-4  text-white">

                    <aside class="box-shadow blue">

                        <!-- dugme za navigaciju -->
                        <div class="toggle-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <figure class="picture marg-r--20">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/al-rahad.jpg" alt=""/>
                            <div class="tekst">
                                <h2 class="font-w600">Al Rayhan</h2>
                                <p>UI & UX Expert</p>
                            </div>
                            <div class="shadow"></div>
                        </figure>

                        <div class="user">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <span class="fa fa-user marg-b-2rem icon-margin"></span>
                                </div>
                                <div class="col-md-9 pr-3">
                                    <div class="px-5 px-md-0">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labor et dolore magna aliqua.
                                            Ut enim ad minim veniamnt in culpa quie officia deserunt mollit.
                                        </p>
                                    </div>
                                    <hr class="granica-1 hr-white">
                                </div>
                            </div>
                        </div>



                        <div class="phone">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <span class="fa fa-phone marg-b-2rem icon-margin"></span>
                                </div>
                                <div class="col-md-9">
                                    <div class="px-5 px-md-0">
                                        <p>(880) 1737-662662</p>
                                        <p class="opacity-w-80 mb-4">Mobile</p>
                                        <p>(880) 1771-299299</p>
                                        <p class="opacity-w-80">Work</p>
                                    </div>
                                    <hr class="granica-1 hr-white">
                                </div>
                            </div>
                        </div>

                        <div class="email">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <span class="fa fa-envelope marg-b-2rem icon-margin"></span>
                                </div>
                                <div class="col-md-9">
                                    <div class="px-5 px-md-0">
                                        <a href="mailto:mail@alrayhan.com">mail@alrayhan.com</a>
                                        <p class="opacity-w-80 mb-4">Personal</p>
                                        <a href="mailto:ar@deviserweb.com">ar@deviserweb.com</a>
                                        <p class="opacity-w-80">Work</p>
                                    </div>
                                    <hr class="granica-1 hr-white">
                                </div>
                            </div>
                        </div>

                        <div class="adress">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <span class="fa fa-map marg-b-2rem icon-margin"></span>
                                </div>
                                <div class="col-md-9">
                                    <div class="px-5 px-md-0">
                                        <p>24 Golden Tower <sup class="opacity-w-80">(2nd floor)</sup></p>
                                        <p>Amberkhana, Sylhet</p>
                                        <p class="opacity-w-80">SYL-3RF87W</p>
                                    </div>
                                    <hr class="granica-1 hr-white">
                                </div>
                            </div>
                        </div>

                        <div class="skills">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/notebook.png" alt="" class="icon-position-2 icon-margin"/>
                                </div>
                                <div class="col-md-9 px-5 px-md-3">
                                    <h2 class="mt-4 mb-5 fs-1_5rem">Professional Skills</h2>
                                    <h4 class="fs-1_2rem">Adobe Photoshop</h4>
                                    <div class="blue-bar" data-skill="90">
                                        <div class="white-bar">
                                            <span class="white-circle"></span>
                                        </div>
                                    </div>
                                    <h4 class="fs-1_2rem">Adobe Illustrator</h4>
                                    <div class="blue-bar" data-skill="70">
                                        <div class="white-bar">
                                            <span class="white-circle"></span>
                                        </div>
                                    </div>
                                    <h4 class="fs-1_2rem">HTML 5 &AMP; CSS 3</h4>
                                    <div class="blue-bar" data-skill="80">
                                        <div class="white-bar">
                                            <span class="white-circle"></span>
                                        </div>
                                    </div>
                                    <h4 class="fs-1_2rem">Java Script</h4>
                                    <div class="blue-bar" data-skill="65">
                                        <div class="white-bar">
                                            <span class="white-circle"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>

                </div>
