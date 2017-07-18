<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grayscale - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= $this->assetUrl('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= $this->assetUrl('css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->

    <link href="<?= $this->assetUrl('css/grayscale.css'); ?>" rel="stylesheet" />
    <link href="<?= $this->assetUrl('css/grayscale.min.css'); ?>" rel="stylesheet" />
    <link href="<?= $this->assetUrl('css/style.css'); ?>" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">Start</span> Bootstrap
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#competences">COMPETENCES</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#formations">FORMATIONS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Grayscale</h1>
                        <p class="intro-text">A free, responsive, one page Bootstrap theme.
                            <br>Created by Start Bootstrap.</p>
                            <a href="#competences" class="btn btn-circle page-scroll">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- About Section -->
        <section id="competences" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="three columns header-col">
                        <h1><span>COMPETENCES</span></h1>
                    </div>
                    <div class="bars">
                        <ul class="skills">
                            <li><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
                            <li><span class="bar-expand illustrator"></span><em>Illustrator</em></li>
                            <li><span class="bar-expand wordpress"></span><em>Wordpress</em></li>
                            <li><span class="bar-expand css"></span><em>CSS</em></li>
                            <li><span class="bar-expand html5"></span><em>HTML5</em></li>
                            <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
                        </ul>

                    </div><!-- end skill-bars -->
                </div>
            </div>
        </section>

        <!-- Formation -->
        <section id="formations" class="container content-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 text-center">
                        <h2 class="section-heading">Formations / Expériences professionnelles</h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="timeline">
                            <ul>
                                <li>
                                    <div>
                                        <time class="text-uppercase">Date</time>
                                        <h4 class="subheading">Intitulé</h4>
                                        <p class="text-muted"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </p>
                                    <span>Lieux</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <time class="text-uppercase">Date</time>
                                    <h4 class="subheading">Intitulé</h4>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span>Lieux</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <time class="text-uppercase">Date</time>
                                    <h4 class="subheading">Intitulé</h4>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span>Lieux</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <time class="text-uppercase">Date</time>
                                    <h4 class="subheading">Intitulé</h4>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span>Lieux</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                        <time class="text-uppercase">Date</time>
                                    <h4 class="subheading">Intitulé</h4>
                                    <p class="text-muted"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </p>
                                <span>Lieux</span>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</section>

<!-- Experience selection -->

<section id="loisir" class="content-section text-center">
    <div class="loisir-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Mes loisirs</h2>
                <div class="loisirs">



                </div>
            </div>
        </div>
    </div>
</section>

<!-- Download Section -->
<section id="download" class="content-section text-center">
    <div class="download-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Download Grayscale</h2>
                <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Contact Start Bootstrap</h2>
            <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
            <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
            </p>
            <ul class="list-inline banner-social-buttons">
                <li>
                    <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                </li>
                <li>
                    <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-linkedin-square fa-fw"></i> <span class="network-name">LinkedIn</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Map Section -->
<div id="map"></div>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p>Copyright &copy; Your Website 2016</p>
    </div>
</footer>

<!-- jQuery -->
<script src="<?= $this->assetUrl('js/jquery.js'); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= $this->assetUrl('js/bootstrap.min.js'); ?>"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Theme JavaScript -->
<script src="<?= $this->assetUrl('js/grayscale.min.js'); ?>"></script>
<script src="<?= $this->assetUrl('js/timeline.js'); ?>"></script>

</body>

</html>
