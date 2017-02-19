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
                            <h2>Pagination</h2>
                            <div class="row">
                                <!--Pagination - Left-->
                                <div class="col-md-6">
                                    <h3>Pagination Left</h3>
                                    <ul class="pagination">
                                        <li>
                                            <a href="#">&laquo;</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">&raquo;</a>
                                        </li>
                                    </ul>
                                    <pre><code>&lt;ul class=&quot;pagination&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                                <!--End Pagination - Left-->
                                <!--Pagination - Right-->
                                <div class="col-md-6">
                                    <h3>Pagination Right</h3>
                                    <div class="text-right">
                                        <ul class="pagination">
                                            <li>
                                                <a href="#">&laquo;</a>
                                            </li>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li class="active">
                                                <a href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <a href="#">4</a>
                                            </li>
                                            <li>
                                                <a href="#">&raquo;</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <pre><code>&lt;div class=&quot;text-right&quot;&gt;
   &lt;ul class=&quot;pagination&quot;&gt;
       &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;&lt;/li&gt;
       &lt;li&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
       &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
       &lt;li&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
       &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
       &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <!--End Pagination - Right-->
                            </div>
                            <hr>
                            <!--Pagination - Centered-->
                            <h3>Pagination Centered</h3>
                            <div class="text-center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#">&laquo;</a>
                                    </li>
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#">&raquo;</a>
                                    </li>
                                </ul>
                            </div>
                            <!--End Pagination - Centered-->
                            <pre><code>&lt;div class=&quot;text-center&quot;&gt;
   &lt;ul class=&quot;pagination&quot;&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                            <hr>
                            <h3 class="margin-bottom-10">Pagination Sizing</h3>
                            <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
                            <!--Pagination - Sizing-->
                            <div class="row margin-bottom-30">
                                <div class="col-md-12">
                                    <ul class="pagination pagination-lg">
                                        <li class="disabled">
                                            <a href="#">&laquo;</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">&raquo;</a>
                                        </li>
                                    </ul>
                                    <pre class="margin-bottom-30"><code>&lt;ul class=&quot;pagination pagination-lg&quot;&gt;
   &lt;li class=&quot;disabled&quot;&gt;&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;&lt;/li&gt;
   &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                                <div class="col-md-12">
                                    <ul class="pagination">
                                        <li>
                                            <a href="#">&laquo;</a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">&raquo;</a>
                                        </li>
                                    </ul>
                                    <pre class="margin-bottom-30"><code>&lt;ul class=&quot;pagination&quot;&gt;
   &lt;li class=&quot;disabled&quot;&gt;&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;&lt;/li&gt;
   &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                                <div class="col-md-12">
                                    <ul class="pagination pagination-sm">
                                        <li>
                                            <a href="#">&laquo;</a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">&raquo;</a>
                                        </li>
                                    </ul>
                                    <pre class="margin-bottom-30"><code>&lt;ul class=&quot;pagination pagination-sm&quot;&gt;
   &lt;li class=&quot;disabled&quot;&gt;&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;&lt;/li&gt;
   &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                            </div>
                            <!--End Pagination Sizing-->
                            <!--Pager Examples-->
                            <div>
                                <div class="headline">
                                    <h2>Pager Examples</h2>
                                </div>
                                <p>At nissimos ducimus voluptatum praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident deleniti atque corrupti quos dolores et quas molestias excepturi
                                    sint occaecati cupiditate non provident suntin culpaid est blanditiis ducimucorrupti quos dolores ets quiblan...</p>
                                <ul class="pager">
                                    <li class="previous">
                                        <a href="#">&larr; Older</a>
                                    </li>
                                    <li class="next">
                                        <a href="#">Newer &rarr;</a>
                                    </li>
                                </ul>
                                <hr>
                                <p>Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpaid est blanditiis ducimus qui blanditiis.</p>
                                <ul class="pager">
                                    <ul class="pager">
                                        <li>
                                            <a href="#">Previous</a>
                                        </li>
                                        <li>
                                            <a href="#">Next</a>
                                        </li>
                                    </ul>
                                </ul>
                            </div>
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