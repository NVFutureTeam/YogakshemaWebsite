<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Habitat - A Professional Bootstrap Template</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            
            <!-- === BEGIN HEADER === -->
            <?php include'header.php' ?>
            <!-- === END HEADER === -->

            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-40">
                        <!-- Begin Sidebar Menu -->
                        <div class="col-md-3">
                            <ul class="list-group sidebar-nav" id="sidebar-nav">
                                <!-- Typography -->
                                <li class="list-group-item list-toggle">
                                    <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-typography">Typography</a>
                                    <ul id="collapse-typography" class="collapse">
                                        <li>
                                            <a href="features-typo-basic.html">
                                                <i class="fa fa-sort-alpha-asc"></i>Basic Typography</a>
                                        </li>
                                        <li>
                                            <a href="features-typo-blockquotes.html">
                                                <i class="fa fa-magic"></i>Blockquotes</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- End Typography -->
                                <!-- Components -->
                                <li class="list-group-item list-toggle">
                                    <a class="accordion-toggle" href="#collapse-components" data-toggle="collapse">Components</a>
                                    <ul id="collapse-components" class="collapse">
                                        <li>
                                            <span class="badge">New</span>
                                            <a href="features-labels.html">
                                                <i class="fa fa-tags"></i>Labels</a>
                                        </li>
                                        <li>
                                            <span class="badge">New</span>
                                            <a href="features-progress-bars.html">
                                                <i class="fa fa-align-left"></i>Progress Bars</a>
                                        </li>
                                        <li>
                                            <a href="features-panels.html">
                                                <i class="fa fa-columns"></i>Panels</a>
                                        </li>
                                        <li>
                                            <a href="features-pagination.html">
                                                <i class="fa fa-arrows-h"></i>Pagination</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- End Components -->
                                <!-- Icons -->
                                <li class="list-group-item list-toggle">
                                    <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-icons">Icons</a>
                                    <ul id="collapse-icons" class="collapse">
                                        <li>
                                            <span class="badge badge-u">New</span>
                                            <a href="features-icons.html">
                                                <i class="fa fa-chevron-circle-right"></i>Icon Styling</a>
                                        </li>
                                        <li>
                                            <a href="features-icons-font-awesome.html">
                                                <i class="fa fa-chevron-circle-right"></i>Font Awesome Icons</a>
                                        </li>
                                        <li>
                                            <a href="features-icons-social.html">
                                                <i class="fa fa-chevron-circle-right"></i>Social Icons</a>
                                        </li>
                                        <li>
                                            <a href="features-icons-glyphicons.html">
                                                <i class="fa fa-chevron-circle-right"></i>Glyphicons</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- End Icons -->
                                <!-- Testimonials -->
                                <li class="list-group-item">
                                    <a href="features-testimonials.html">Testimonials</a>
                                </li>
                                <!-- End Testimonials -->
                                <!-- Accordion and Tabs -->
                                <li class="list-group-item">
                                    <a href="features-accordions-tabs.html">Accordions & Tabs</a>
                                </li>
                                <!-- End Accordion and Tabs -->
                                <!-- Buttons -->
                                <li class="list-group-item">
                                    <a href="features-buttons.html">Buttons</a>
                                </li>
                                <!-- End Buttons -->
                                <!-- Carousels -->
                                <li class="list-group-item">
                                    <a href="features-carousels.html">Carousels</a>
                                </li>
                                <!-- End Accordion and Tabs -->
                                <!-- Animate On Scroll -->
                                <li class="list-group-item">
                                    <a href="features-animate-on-scroll.html">Animate On Scroll</a>
                                </li>
                                <!-- End Animate On Scroll -->
                                <!-- Grid System -->
                                <li class="list-group-item">
                                    <a href="features-grid.html">Grid System</a>
                                </li>
                                <!-- End Grid System -->
                            </ul>
                        </div>
                        <!-- End Sidebar Menu -->
                        <div class="col-md-9">
                            <h2>Animate On Scroll</h2>
                            <p>We have included an option to easily add animations to almost any element of your site content. These animations are triggered once elements enter the viewport of your browser as you scroll down the page adding life and energy
                                to your site content. Great for adding focus to particular elements of your content which you wish to bring to the attention of your visitors.</p>
                            <p>Doing so is as simple as adding 2 class names to the element you wish to animate!</p>
                            <pre>&lt;div class=&quot;animate fadeIn&quot;&gt;
   Animate this text!
&lt;/div&gt;</pre>
                            <!-- AnimateOnScroll Examples -->
                            <div class="animatebox animate fadeIn">animate fadeIn</div>
                            <div class="animatebox animate fadeInUp">animate fadeInUp</div>
                            <div class="animatebox animate fadeInUpBig">animate fadeInUpBig</div>
                            <div class="animatebox animate fadeInDown">animate fadeInDown</div>
                            <div class="animatebox animate fadeInDownBig">animate fadeInDownBig</div>
                            <div class="animatebox animate fadeInLeft">animate fadeInLeft</div>
                            <div class="animatebox animate fadeInLeftBig">animate fadeInLeftBig</div>
                            <div class="animatebox animate fadeInRight">animate fadeInRight</div>
                            <div class="animatebox animate fadeInRightBig">animate fadeInRightBig</div>
                            <div class="animatebox animate flip">animate flip</div>
                            <div class="animatebox animate flipInX">animate flipInX</div>
                            <div class="animatebox animate flipInY">animate flipInY</div>
                            <div class="animatebox animate lightSpeedIn">animate lightSpeedIn</div>
                            <div class="animatebox animate rotateIn">animate rotateIn</div>
                            <div class="animatebox animate rotateInDownLeft">animate rotateInDownLeft</div>
                            <div class="animatebox animate rotateInDownRight">animate rotateInDownRight</div>
                            <div class="animatebox animate rotateInUpLeft">animate rotateInUpLeft</div>
                            <div class="animatebox animate rotateInUpRight">animate rotateInUpRight</div>
                            <div class="animatebox animate slideInDown">animate slideInDown</div>
                            <div class="animatebox animate slideInRight">animate slideInRight</div>
                            <div class="animatebox animate slideInLeft">animate slideInLeft</div>
                            <div class="animatebox animate rollIn">animate rollIn</div>
                            <div class="animatebox animate bounce">animate bounce</div>
                            <div class="animatebox animate flash">animate flash</div>
                            <div class="animatebox animate shake">animate shake</div>
                            <div class="animatebox animate swing">animate swing</div>
                            <div class="animatebox animate wobble">animate wobble</div>
                            <!-- End AnimateOnScroll Examples -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            
            <!-- === BEGIN FOOTER === -->
            <?php include 'footer.php'; ?>
            <!-- End Footer -->
            
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->