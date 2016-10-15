<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Club de Libros</title>

    <!-- Master CSS -->
    <link href="/css/master.css" rel="stylesheet">

    <!-- jQuery-->
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/modernizr.js"></script>

    <!-- Switcher Only -->

    <link rel="stylesheet" id="switcher-css" type="text/css" href="/plugins/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="/plugins/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="/plugins/switcher/css/purple.css" title="purple" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="/plugins/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="/plugins/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="/plugins/switcher/css/red.css" title="red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="/plugins/switcher/css/yellow.css" title="yellow" media="all" />

    <!-- Switcher Only -->

</head>

<body class="animated-all">

<!-- Loader aqui -->


    <div id="cd-nav"> <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
        <nav id="cd-main-nav">
            <ul>
                <li class="active"><a href="index.html"><span>Home</span> <small>X-Sport Home Page</small> </a></li>
                <li><a href="blog.html"><span>NEWS & BLOG</span> <small>X-Sport News</small></a></li>
                <li ><a href="post.html"><span>Post </span> <small>X-Sport Post </small></a></li>
                <li><a href="shop.html" class="dropdown-toggle" data-toggle="dropdown"><span>Shop<b class="caret"></b></span> <small>SEE ALL MODELS</small></a>
                    <ul>
                        <li><a href="shop.html">Home</a></li>
                        <li><a href="catalog.html">Catalog</a></li>
                        <li><a href="product.html"  >Product</a></li>
                    </ul>
                </li>
                <li ><a href="page.html"><span>Page</span> <small>X-Sport page </small></a></li>
            </ul>
        </nav>
    </div>
    <div class="header shop-header">
        <div class="container">
            <div class="row">
                <div class="top-header">
                    <div class="info-top col-md-6">
                        <ul >
                            <li><a href="#">Payment and Delivery</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="">Contact</a></li>
                            <li>&nbsp;<i class="fa fa-phone"></i> + 0123-456-789</li>
                        </ul>
                    </div>
                    <div class="info-top col-md-6 text-right">
                        <ul >
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}" class="link"><i class="icon-login icon-large"></i>Login</a></li>
                                <li > <a href="{{ url('/register') }}" class="link"><i class="icon-user icon-large"></i>Regístrate</a> </li>
                            @else
                                <li>Hola {{ Auth::user()->third->name }}, </li>
                                <li > <a href="{{ route('user.profile.index') }}" class="link"><i class="icon-user icon-large"></i>Mi Perfil</a> </li>
                                <li><a href="{{ url('/logout') }}" class="link"><i class="icon-logout icon-large"></i>Logout</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="shop-section ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-12 col-xs-12 mobile-center">
                        <div class="blog-logo text-left"><a href="/"> <img src="/img/shop-logo.png"  alt="logo"/></a></div>
                    </div>
                    <div class="col-md-6  col-xs-12 mobile-center">
                        <div class="input-group top-search">
                            <div class="input-group-btn search-panel">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <span id="search_concept">Filter by</span> <span class="caret"></span> </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#contains">Contains</a></li>
                                    <li><a href="#its_equal">It's equal</a></li>
                                    <li><a href="#greather_than">Greather than </a></li>
                                    <li><a href="#less_than">Less than </a></li>
                                    <li class="divider"></li>
                                    <li><a href="#all">Anything</a></li>
                                </ul>
                            </div>
                            <input type="hidden" name="search_param" value="all" id="search_param">
                            <input type="text" class="form-control" name="x" placeholder="Search term...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
            </span> </div>
                    </div>
                    <div class="col-md-3 col-xs-12 text-right mobile-center">
                        <div class="popover-shorty"> <a  href="/"> <span class="qty-top-cart-active">3</span> <i class="fa fa-shopping-cart"></i> </a>
                            <div class="popover popover-cart bottom">
                                <div class="media"> <a href="#" class="media-left"> <img src="media/item/4/1.jpg" width="600" height="700" alt=""/> </a>
                                    <div class="media-body">
                                        <div class="entry-header">
                                            <h5 class="entry-title"><a href="#">Phasellus vehicula</a></h5>
                                        </div>
                                        <div class="entry-meta">
                                            <div class="price-box"> <span class="price-regular-single">$220.00</span> <span class="price-reduction">70%</span> </div>
                                            <div class="qty-cart">Quantity: 23</div>
                                        </div>
                                        <div  class="del-cart-item"> <i class="fa fa-times"></i> </div>
                                    </div>
                                </div>
                                <div class="media"> <a href="#" class="media-left"> <img src="media/item/4/2.jpg" width="600" height="700" alt="img"/> </a>
                                    <div class="media-body">
                                        <div class="entry-header">
                                            <h5 class="entry-title"><a href="#">Phasellus vehicula</a></h5>
                                        </div>
                                        <div class="entry-meta">
                                            <div class="price-box"> <span class="price-regular-single">$540.00</span> </div>
                                            <div class="qty-cart">Quantity: 11</div>
                                        </div>
                                        <div  class="del-cart-item"> <i class="fa fa-times"></i> </div>
                                    </div>
                                </div>
                                <div class="media"> <a href="#" class="media-left"> <img src="media/item/4/4.jpg" width="600" height="700" alt="img"/> </a>
                                    <div class="media-body">
                                        <div class="entry-header">
                                            <h5 class="entry-title"><a href="#">Phasellus vehicula</a></h5>
                                        </div>
                                        <div class="entry-meta">
                                            <div class="price-box"> <span class="price-regular-single">$120.00</span> <span class="price-old">$700.00</span></div>
                                            <div class="qty-cart">Quantity: 1</div>
                                        </div>
                                        <div  class="del-cart-item"> <i class="fa fa-times"></i> </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="row text-center">
                                        <div class="col-xs-7 text-left"> Cart Subtotal: </div>
                                        <div class="col-xs-5 text-right"> $ 1232.00 </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="row text-center">
                                        <div class="col-xs-7 text-left"> Shipping: </div>
                                        <div class="col-xs-5 text-right"> $ 12.00 </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="row text-center"> <a class=" btn btn-cart" href="cart"> Checkout</a>
                                        <button class=" btn btn-danger" type="button"> View Cart </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popover-shorty"> <a  href="/"><i class="fa fa-truck"></i> </a>
                            <div class="popover bottom">
                                <div class="arrow"></div>
                                <h3 class="popover-title">Reliable delivery</h3>
                                <div class="popover-content"> Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. </div>
                            </div>
                        </div>
                        <div class="popover-shorty"> <a  href="/"><i class="fa fa-thumbs-o-up"></i> </a>
                            <div class="popover bottom">
                                <div class="arrow"></div>
                                <h3 class="popover-title">Quality guarantee</h3>
                                <div class="popover-content"> Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. </div>
                            </div>
                        </div>
                        <div class="popover-shorty"> <a  href="/"><i class="fa fa-facebook"></i> </a>
                            <div class="popover bottom">
                                <div class="arrow"></div>
                                <h3 class="popover-title">Facebook follow </h3>
                                <div class="popover-content"> Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="navbar yamm navbar-default ">
            <div class="container">
                <div class="navbar yamm navbar-default ">
                    <div class="container">
                        <nav id="navbar-collapse-1" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active" ><a href="/">Inicio</a></li>
                                <li><a href="/book">Libros</a></li>
                                <li   ><a href="catalog.html">Catalog  Page</a></li>
                                <li><a href="product.html">Product  Page</a></li>
                                <li ><a href="blog.html">Blog Page</a></li>
                                <li><a href="post.html">Post  Page</a></li>
                                <!-- Classic dropdown -->
                                <li class="dropdown yamm-classic"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Classic<b class="caret"></b></a>
                                    <ul class="dropdown-menu ">
                                        <li><a  href="#"> QUECHUA FORCLAZ 500 SOFTSHELL HIKING WEAR </a></li>
                                        <li><a  href="#"> FORCLAZ GOFTSHELL HIKING WEAR</a></li>
                                        <li><a  href="#"> SOFTSHELL HIKING 300 WEAR </a></li>
                                        <li><a  href="#"> Paenitet me789 quod tultus plastic</a></li>
                                        <li><a  href="#"> FORCLAZ 500 SOFTSHELL HIKING WEAR</a></li>
                                        <li><a  href="#"> QUECHUA FORCLAZ 500LL HIKING WEAR</a> </li>
                                    </ul>
                                </li>
                                <!-- Pictures -->
                                <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Mega Menu<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <h5> SPORTS & FITNESS </h5>
                                                        <ul>
                                                            <li> <a href="#"> Bicycles & Accessories</a></li>
                                                            <li> <a href="#">Badminton</a></li>
                                                            <li> <a href="#">Fitness Accessories</a></li>
                                                            <li> <a href="#">Fitness Equipment</a></li>
                                                            <li> <a href="#">Outdoor Adventure Gear</a></li>
                                                            <li> <a href="#">Active Wear</a></li>
                                                            <li> <a href="#">Swimming Equipments</a></li>
                                                            <li> <a href="#">Water Sports</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <h5> NUTRITION</h5>
                                                        <ul>
                                                            <li> <a href="#"> Top Proteins</a></li>
                                                            <li> <a href="#">JSB Massagers</a></li>
                                                            <li> <a href="#">Horlicks</a></li>
                                                            <li> <a href="#">AccuChek</a></li>
                                                            <li> <a href="#">Omron BP Monitors</a></li>
                                                            <li> <a href="#">Herbalife Protein</a></li>
                                                            <li> <a href="#">Apollo Munich</a></li>
                                                            <li> <a href="#">Weight Gainers</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <h5> NEW ARRIVALS</h5>
                                                        <ul>
                                                            <li> <a href="#">Heart & Blood Pressure</a></li>
                                                            <li> <a href="#">Weighing Scale & Daily Needs</a></li>
                                                            <li> <a href="#">Massagers</a></li>
                                                            <li> <a href="#">Supports & Rehabilitation</a></li>
                                                            <li> <a href="#">Sexual WellnessHOT</a></li>
                                                            <li> <a href="#">Shop Privately At Home</a></li>
                                                            <li> <a href="#">E-Cigarette & E-Shisha</a></li>
                                                            <li> <a href="#">Alternative Health Therapy</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a href="#" class="thumbnail"><img src="media/menu/promo.jpg" width="270" height="270" alt="img"/></a> </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a href="#" class="thumbnail"> <img src="media/menu/pormo2.jpg" width="350" height="140" alt="img"/> </a> </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a href="#" class="thumbnail"> <img src="media/menu/pormo3.jpg" width="350" height="140" alt="img"/> </a> </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a href="#" class="thumbnail"> <img src="media/menu/pormo4.jpg" width="350" height="140" alt="img"/> </a> </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--IVIEW-->
    <link rel="stylesheet" href="/plugins/iview/css/iview.css" />
    <link rel="stylesheet" href="/plugins/iview/css/skin/style2.css" />
    <script src="/plugins/iview/js/iview.js"></script>
    <!--END-->


    @include('flash::message')

    @yield('content')

            <!-- SECTION -->

    <footer class="footer footer-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="fot-box">
                        <h3 class="fot-title">CLUB OPENING HOURS</h3>
                        <p>Sed vitae diam. Suspendisse vel justo mattis
                            magna vestibulum molestie. Ut  Nulla facilis
                            In hac habitasse platea dictumst. Aliquam
                            tincidunt aliquet nunc. Ut tincidunt magna
                            in eros. Vivamus a metus.</p>
                    </div>
                    <div class="fot-box">
                        <div class="widget widget-newsletter ">
                            <h3 class="fot-title">NEWSLETTER SIGNUP</h3>
                            <form action="/" class="newsletterform" id="newsletterform" method="get" role="search">
                                <input type="text" id="s" name="s" value="" placeholder="Enter ID">
                                <button>SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="fot-box">
                        <h3 class="fot-title">Information</h3>
                        <ul class="x-hover-box">
                            <li> <a href="#"> Delivery</a></li>
                            <li> <a href="#"> Legal Notice</a></li>
                            <li> <a href="#"> About us</a></li>
                            <li> <a href="#"> Sitemap</a></li>
                            <li> <a href="#"> Our stores</a></li>
                            <li> <a href="#"> Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="fot-box">
                        <h3 class="fot-title"> Category</h3>
                        <ul class="x-hover-box">
                            <li> <a href="#"> Bicycles &amp; Accessories</a></li>
                            <li> <a href="#">Badminton</a></li>
                            <li> <a href="#">Fitness Accessories</a></li>
                            <li> <a href="#">Fitness Equipment</a></li>
                            <li> <a href="#">Outdoor Adventure Gear</a></li>
                            <li> <a href="#">Active Wear</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="fot-box">
                        <h3 class="fot-title">Contact Us</h3>
                        <div class="media fot-contact">
                            <div class="media-left" > <i class="fa fa-home"></i> </div>
                            <div class="media-body">
                                <p> 123 canberra Street, New York,<br>
                                    USA 33026 </p>
                            </div>
                        </div>
                        <div class="media fot-contact">
                            <div class="media-left" ><i class="fa fa-envelope"></i> </div>
                            <div class="media-body">
                                <p> <a href="mailto:support@xtremesp.org">order@xtremesports.org</a></p>
                            </div>
                        </div>
                        <div class="media fot-contact">
                            <div class="media-left" ><i class="fa fa-phone-square"></i> </div>
                            <div class="media-body">
                                <p> 0800 123 4567</p>
                            </div>
                        </div>
                    </div>
                    <div class="fot-box">
                        <h3 class="fot-title">FIND US ON</h3>
                        <div class="social-box">
                            <ul class="social-links">
                                <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                                <li class=""><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                                <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- AlLL SCRIPTS & PLUGINS -->

    <!--Color Switcher-->
    <script src="/plugins/switcher/js/bootstrap-select.js"></script>
    <script src="/plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script>
    <script src="/plugins/switcher/js/dmss.js"></script>

    <!-- SWITCHER -->
    <script src="/plugins/switcher/js/bootstrap-select.js"></script>
    <script src="/plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script>
    <script src="/plugins/switcher/js/dmss.js"></script>
    <!-- MAIN SCRIPTS-->

    <!--Blazy image-->
    <script type="text/javascript" src="/js/blazy.min.js"></script>

    <!--Waypoint-->
    <script src="/js/waypoints.min.js"></script>
    <!--Ios Fix-->
    <script src="/js/ios-orientationchange-fix.js"></script>
    <!--Element form Styled-->
    <script src="/plugins/selectbox/jquery.selectbox-0.2.js"></script>

    <!--Sly Slider-->
    <script type="text/javascript" src="/plugins/sly/sly.min.js"></script>
    <!--Bx Slider-->
    <script src="/plugins/bxslider/jquery.bxslider.min.js"></script>
    <!--Flex Slider-->
    <script src="/plugins/flexslider/jquery.flexslider-min.js"></script>
    <!-- Flickr-->
    <script src="/plugins/jflickrfeed/jflickrfeed.min.js" ></script>
    <!-- Catalog Price-->
    <script src="/plugins/nouislider/jquery.nouislider.min.js"></script>
    <!-- Magnific-->
    <script type="text/javascript" src="/plugins/magnific/jquery.magnific-popup.js"></script>
    <!-- Pretty Photo -->
    <script src="/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <!-- SMart Menu -->
    <script src="/plugins/smart-menu/smart-menu.js"></script>
    <!-- User agent -->
    <script type="text/javascript" src="/js/cssua.min.js"></script>
    <!-- Loader -->
    <script src="/plugins/loader/js/classie.js"></script>
    <script src="/plugins/loader/js/pathLoader.js"></script>

    <!--SHOP SCRIPTS -->

    <!--Catalog Points-->
    <script src="/plugins/points/points.js" ></script>

    <!--HOME SCRIPTS-->

    <!--Isotope filter-->
    <script type="text/javascript" src="/plugins/isotope/jquery.isotope.min.js"></script>
    <!--Contact form-->
    <script src="/js/jqBootstrapValidation.js"></script>
    <!-- SMart Grid-->
    <script src="/plugins/events/masonry.pkgd.min.js"></script>
    <!-- Events -->
    <script src="/plugins/events/events.js"></script>
    <!--Count Down-->
    <script src="/plugins/countdown/jquery.countdown.min.js" ></script>
    <!-- Newsletter -->
    <script src="/plugins/newsletter/main.js" ></script>
    <!-- Bio -->
    <script type="text/javascript" src="/plugins/bio/js/bio.js"></script>
    <!--IVIEW-->
    <script src="/plugins/iview/js/iview.js"></script>

    <!--Scripts-->
    <script type="text/javascript" src="/js/scripts.js"></script>
</body>
</html>
