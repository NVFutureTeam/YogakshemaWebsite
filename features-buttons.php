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
                            <!-- Button Size -->
                            <h3 class="margin-bottom-20">Button Size</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <p>
                                        <button type="button" class="btn btn-primary btn-xs">Button</button>btn btn-xs</p>
                                    <p>
                                        <button type="button" class="btn btn-primary btn-sm">Button</button>btn btn-sm</p>
                                    <p>
                                        <button type="button" class="btn btn-primary">Button</button>btn</p>
                                    <p>
                                        <button type="button" class="btn btn-primary btn-lg">Button</button>btn btn-lg</p>
                                </div>
                                <div class="col-md-9">
                                    <p>Set the size of your buttons using the default Bootstrap classes <code>btn-xs</code>, <code>btn-sm</code> and <code>btn-lg</code>.</p>
                                    <pre><code class="html">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-xs&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;Button&lt;/button&gt;</code></pre>
                                </div>
                            </div>
                            <!-- End Button Size -->
                            <hr>
                            <!-- Default Bootstrap Buttons -->
                            <h3 class="margin-bottom-20">Default Bootstrap Buttons</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <p>
                                        <button type="button" class="btn btn-default">Default</button>btn-default</p>
                                    <p>
                                        <button type="button" class="btn btn-primary">Primary</button>btn-primary</p>
                                    <p>
                                        <button type="button" class="btn btn-info">Info</button>btn-info</p>
                                    <p>
                                        <button type="button" class="btn btn-success">Success</button>btn-success</p>
                                    <p>
                                        <button type="button" class="btn btn-warning">Warning</button>btn-warning</p>
                                    <p>
                                        <button type="button" class="btn btn-danger">Danger</button>btn-danger</p>
                                </div>
                                <div class="col-md-9">
                                    <p>All the default button classes you expect to find with Bootstrap are included.</p>
                                    <pre><code class="html">&lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-link&quot;&gt;Button&lt;/button&gt;</code></pre>
                                </div>
                            </div>
                            <!-- End Default Bootstrap Buttons -->
                            <hr>
                            <!-- Extra Buttons -->
                            <h3 class="margin-bottom-20">Extra Buttons</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <p>
                                        <button type="button" class="btn btn-green">Green</button>btn-green</p>
                                    <p>
                                        <button type="button" class="btn btn-bronze">Bronze</button>btn-bronze</p>
                                    <p>
                                        <button type="button" class="btn btn-red">Red</button>btn-red</p>
                                    <p>
                                        <button type="button" class="btn btn-violet">Violet</button>btn-violet</p>
                                    <p>
                                        <button type="button" class="btn btn-blue">Blue</button>btn-blue</p>
                                    <p>
                                        <button type="button" class="btn btn-aqua">Aqua</button>btn-aqua</p>
                                </div>
                                <div class="col-md-9">
                                    <p>As well as all the default Bootstrap button colors we have added a collection of our own which you can integrate in to your next project.</p>
                                    <pre><code class="html">&lt;button type=&quot;button&quot; class=&quot;btn btn-green&quot;&gt;Green&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-bronze&quot;&gt;Bronze&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-red&quot;&gt;Red&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-violet&quot;&gt;Violet&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-blue&quot;&gt;Blue&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-aqua&quot;&gt;Aqua&lt;/button&gt;</code></pre>
                                </div>
                            </div>
                            <!-- End Extra Buttons -->
                            <hr>
                            <!-- Button Icons -->
                            <h3 class="margin-bottom-20">Button Icons</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <p>
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-picture-o"></i>Icon Button
                                        </button>
                                    </p>
                                    <p>
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-database"></i>Icon Button
                                        </button>
                                    </p>
                                    <p>
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-bar-chart-o"></i>Icon Button
                                        </button>
                                    </p>
                                    <p>
                                        <button class="btn btn-lg btn-primary" type="button">
                                            <i class="fa fa-cogs"></i>
                                        </button>
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-coffee"></i>
                                        </button>
                                        <button class="btn btn-sm btn-primary" type="button">
                                            <i class="fa fa-camera"></i>
                                        </button>
                                    </p>
                                </div>
                                <div class="col-md-9">
                                    <p>With the integration of Font Awesome with your template you can add any icon from a collection of over 400 icons to your buttons.</p>
                                    <pre><code class="html">&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;
	&lt;i class=&quot;fa fa-picture-o&quot;&gt;&lt;/i&gt; Icon Button
&lt;/button&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;
	&lt;i class=&quot;fa fa-database&quot;&gt;&lt;/i&gt; Icon Button
&lt;/button&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;
	&lt;i class=&quot;fa fa-bar-chart-o&quot;&gt;&lt;/i&gt; Icon Button
&lt;/button&gt;
&lt;button class=&quot;btn btn-lg btn-primary&quot; type=&quot;button&quot;&gt;
	&lt;i class=&quot;fa fa-cogs&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;
	&lt;i class=&quot;fa fa-coffee&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-sm btn-primary&quot; type=&quot;button&quot;&gt;
	&lt;i class=&quot;fa fa-camera&quot;&gt;&lt;/i&gt;
&lt;/button&gt;</code></pre>
                                </div>
                            </div>
                            <!-- End Buttons Icons -->
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="base">
                <div class="container bottom-border padding-vert-30">
                    <div class="row">
                        <!-- Disclaimer -->
                        <div class="col-md-4">
                            <h3 class="class margin-bottom-10">Disclaimer</h3>
                            <p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with the template or in any of the Joomla51 club membership plans.</p>
                            <p>Most of the images used here are available from
                                <a href="http://www.shutterstock.com/" target="_blank">shutterstock.com</a>. Links are provided if you wish to purchase them from their copyright owners.</p>
                        </div>
                        <!-- End Disclaimer -->
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>1-800-123-4567
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:info@example.com">info@example.com</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="http://www.example.com">www.example.com</a>
                            </p>
                            <p>The Dunes, Top Road,
                                <br>Strandhill,
                                <br>Co. Sligo,
                                <br>Ireland</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Sample Menu -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Sample Menu</h3>
                            <ul class="menu">
                                <li>
                                    <a class="fa-tasks" href="#">Placerat facer possim</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="#">Quam nunc putamus</a>
                                </li>
                                <li>
                                    <a class="fa-signal" href="#">Velit esse molestie</a>
                                </li>
                                <li>
                                    <a class="fa-coffee" href="#">Nam liber tempor</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div id="footer" class="background-grey">
                <div class="container">
                    <div class="row">
                        <!-- Footer Menu -->
                        <div id="footermenu" class="col-md-8">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Menu -->
                        <!-- Copyright -->
                        <div id="copyright" class="col-md-4">
                            <p class="pull-right">(c) 2014 Your Copyright Info</p>
                        </div>
                        <!-- End Copyright -->
                    </div>
                </div>
            </div>
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
<!-- === END FOOTER === -->?>