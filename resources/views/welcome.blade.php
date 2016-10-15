@extends('layouts.app')

@section('content')


    <div id="iview">
        <div data-iview:thumbnail="/media/1920x960/2.jpg" data-iview:image="/media/1920x960/2.jpg" data-iview:transition="block-drop-random" data-iview:pausetime="2000">
            <div class="container">
                <div class="iview-caption text-center bg-no-caption" data-x="280" data-y="180" data-transition="expandUp">
                    <h3>mountain bikes</h3>
                    <p> FINE TUNED, SLEEK & SMOOTH, THIS SLIDER WILL IMPRESS YOUR VISITORS</p>
                    <a href="#banner01" class="btn">EXPLORE NOW</a> </div>
            </div>
        </div>

        <div data-iview:thumbnail="/media/1920x960/4.jpg" data-iview:image="media/1920x960/4.jpg">
            <div class="container">
                <div class="iview-caption text-center bg-no-caption" data-x="280" data-y="180" data-transition="expandUp">
                    <h3>xTreme-Sports</h3>
                    <p> FINE TUNED, SLEEK & SMOOTH, THIS SLIDER WILL IMPRESS YOUR VISITORS</p>
                    <a href="#banner01" class="btn">EXPLORE NOW</a> </div>
            </div>
        </div>
    </div>

    <div id="banner01" class="banner-full-width primary-color">
        <div class="container">
            <div class="row">
                @if (Auth::guest())
                    <div class="col-lg-8 text-right">
                        <h3>BUSCA EL LIBRO DE TU PREFERENCIA, PIDELO PRESTADO, LEELO Y PASALO A OTRO!</h3>
                        <h5>PRESTA TUS LIBROS Y BUSCA EL QUE QUIERAS LEER</h5>
                    </div>
                    <div class="col-lg-2 text-left"> <a class="btn" href="{{  url('/register') }}">REGISTRATE</a> </div>
                @else
                    <div class="col-lg-8 text-right">
                        <h3>TIENES UN LIBRO QUE YA LEISTE Y TE INTERESA COLABORAR?</h3>
                        <h5>REGISTRALO EN NUESTRA BASE DE DATOS Y PRESTALO</h5>
                    </div>
                    <div class="col-lg-2 text-left"> <a class="btn" href="{{  url('/book/register') }}">INGRESA UN LIBRO</a> </div>
                @endif
                <div class="col-lg-2 text-right"></div>
            </div>
        </div>
    </div>

    <section class="x-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div data-animation="flipInX" class="heading-wrap animated animation-done flipInX heading-wrap-style-2">
                        <div class="small-logo">WELCOME TO</div>
                        <h2 class="section-heading">XTREME SPORTS CLUB ONLINE SHOP</h2>
                        <p>Aenean urna tellus sodales aliquam egestas quis convallis cursus magna. Fusce sa scelerisque. Proin tempor rci vestibulum adipiscing. Etiam blanditd Vestibulum nis Duis nibh dui porttitor eu rhoncus uted. Fusce lacus alc neque interdum pulvinarl Integer vel ante ut. Pellentesque habitant
                            tristique senectus et netus et malesuada fames ac nunc placerat cursus eros. Donec turpis. Nullam porttitor urabitur</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="double-line">
    </section>

    <!-- SECTION -->

    <section class="x-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="heading-wrap animated"  data-animation="flipInX" >
                        <div class="small-logo">SHOP IN</div>
                        <h2 class="section-heading">FEATURED CATEGORY</h2>
                    </div>
                </div>
            </div>

            <div class="isotope-frame animated" data-animation="bounceInUp">
                <ul class="isotope-filter product-grid  product-grid">

                    <li class="isotope-item jump">
                        <div class="product-container label-not-available-active">
                            <div class="product-image"> <span class="label-not-available">not available</span>
                                <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/5/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                                <a href="product.html"> <img
                                            src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"
                                                                                                                                            src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> </div>
                            <div class="product-bottom">
                                <h3 class="product-name x-hover"><span class="x-hover-text">SOFTSHELL HIKING 300 WEAR</span></h3>
                                <div class="price-box"> <span class="price-regular">$420.00</span> <span class="price-old">$700.00</span> </div>
                                <div class="only-list-view">
                                    <div class="product-desc">
                                        <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" disabled class="btn btn-danger"> Add to cart </button>
                                    </div>
                                    <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="isotope-item bikes">
                        <div class="product-container label-hot-active ">
                            <div class="product-image"> <span class="label-hot">HOT</span>
                                <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/8/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                                <img
                                        src="media/item/8/1.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"
                                                                                                            src="media/item/8/2.jpg" width="600" height="700" alt="img"/> </div>
                            <div class="product-bottom">
                                <h3 class="product-name x-hover"><span class="x-hover-text">FORCLAZ
                500 SOFTSHELL HIKING WEAR</span></h3>
                                <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-reduction">70%</span> </div>
                                <div class="only-list-view">
                                    <div class="product-desc">
                                        <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger"> Add to cart </button>
                                    </div>
                                    <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="isotope-item water">
                        <div class="product-container">
                            <div class="product-image">
                                <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/6/26.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                                <img
                                        src="media/item/6/26.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"
                                                                                                             src="media/item/6/27.jpg" width="600" height="700" alt="img"/> </div>
                            <div class="product-bottom">
                                <h3 class="product-name x-hover"><span class="x-hover-text">Paenitet me789 quod tultus plastic</span></h3>
                                <div class="price-box"> <span class="price-regular">$220.00</span> </div>
                                <div class="only-list-view">
                                    <div class="product-desc">
                                        <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger"> Add to cart </button>
                                    </div>
                                    <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="isotope-item bikes">
                        <div class="product-container">
                            <div class="product-image">
                                <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/7/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                                <a href="product.html"> <img
                                            src="media/item/7/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"
                                                                                                                                            src="media/item/7/2.jpg" width="600" height="700" alt="img"/></a> </div>
                            <div class="product-bottom">
                                <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ
                500LL HIKING WEAR</span></h3>
                                <div class="price-box"> <span class="price-regular">$170.00</span> </div>
                                <div class="only-list-view">
                                    <div class="product-desc">
                                        <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger"> Add to cart </button>
                                    </div>
                                    <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="x-navigation navigation"> <a href="shop.html" class="btn btn-danger">VER LIBROS DISPONIBLES</a> </div>
        </div>
    </section>

    <!-- SECTION -->
    <!-- SECTION -->

    <section  class="no-bg-color-parallax parallax-black home-section" style="background-image:url(media/bg/2.jpg)" >
        <ul class="bg-slideshow">
            <li>
                <div class="bg-slide" style="background-image:url(media/bg/2.jpg)"></div>
            </li>
            <li>
                <div class="bg-slide" style="background-image:url(media/bg/3.jpg)"></div>
            </li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-4  col-xs-12  text-center " >
                    <div class="ft-box animated"   data-animation="bounceInUp">
                        <div class="ft-icon-box "> <img src="img/iconic/05.png"  alt="img"/></div>
                        <hr style="max-width:30px;">
                        <h4> INSCRIBETE AL CLUB</h4>
                        <p>Fusce ut odio get eleifend tincidunt vestibulum fring
                            al rsus in metus. Sep interd umli uam scelerisque.
                            Nam odiodui vestibulum amolestie pulvinar</p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4  col-xs-12  text-center  animated"   data-animation="bounceUp" >
                    <div class="ft-box animated"   data-animation="bounceInUp">
                        <div class="ft-icon-box "> <img src="img/iconic/06.png"  alt="img"/></div>
                        <hr style="max-width:30px;">
                        <h4>PRESTA TUS LIBROS</h4>
                        <p>Fusce ut odio get eleifend tincidunt vestibulum fring
                            al rsus in metus. Sep interd umli uam scelerisque.
                            Nam odiodui vestibulum amolestie pulvinar</p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4  col-xs-12  text-center">
                    <div class="ft-box animated"   data-animation="bounceInUp">
                        <div class="ft-icon-box "> <img src="img/iconic/07.png"  alt="img"/></div>
                        <hr style="max-width:30px;">
                        <h4>SOLICITA UN LIBRO</h4>
                        <p>Fusce ut odio get eleifend tincidunt vestibulum fring
                            al rsus in metus. Sep interd umli uam scelerisque.
                            Nam odiodui vestibulum amolestie pulvinar</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section-footer sf-type-2">
                <div class="sf-left" style="background-color:#f4f4f4"></div>
                <div class="sf-right"  style="background-color:#f4f4f4" ></div>
            </div>
        </div>
    </section>

    <!-- SECTION -->

    <section style="background-color:#f4f4f4;" class="home-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="heading-wrap animated"  data-animation="bounceInUp" >
                        <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
                        <h2 class="section-heading">TESTIMONIO DE USUARIOS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <section class="xcarousel-3 animated" data-animation="bounceInUp" >
                    <div class="x-frame" >
                        <ul class="x-slider review-slider">
                            <li>
                                <div class="avatar-review "> <img
                                            src="media/270x337/1.jpg" width="269" height="345" alt="img"/> </div>
                                <div class="details-review">
                                    <p>Interd umli Aliquam scelerisque. In sollicd itudin gravida tortor. Class aptent tacitd sociosqu ad litoracel torquent. Suspendisse vehicula rhoncus leo. Integer ante bio nunc accumsan sed tempus rutrum. </p>
                                    <div class="autor-date"> <i class="fa fa-quote-left"></i>
                                        <h5>Pergo coctione</h5>
                                        <p>Member of the Club</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="avatar-review "> <img
                                            src="media/270x337/2.jpg" width="269" height="345" alt="img"/> </div>
                                <div class="details-review">
                                    <p>Interd umli Aliquam scelerisque. In sollicd itudin gravida tortor. Class aptent tacitd sociosqu ad litoracel torquent. Suspendisse vehicula rhoncus leo. Integer ante bio nunc accumsan sed tempus rutrum. </p>
                                    <div class="autor-date"> <i class="fa fa-quote-left"></i>
                                        <h5>Pergo coctione</h5>
                                        <p>Member of the Club</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="avatar-review "> <img
                                            src="media/270x337/3.jpg" width="269" height="345" alt="img"/> </div>
                                <div class="details-review">
                                    <p>Interd umli Aliquam scelerisque. In sollicd itudin gravida tortor. Class aptent tacitd sociosqu ad litoracel torquent. Suspendisse vehicula rhoncus leo. Integer ante bio nunc accumsan sed tempus rutrum. </p>
                                    <div class="autor-date"> <i class="fa fa-quote-left"></i>
                                        <h5>Pergo coctione</h5>
                                        <p>Member of the Club</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="avatar-review "> <img
                                            src="media/270x337/4.jpg" width="269" height="345" alt="img"/> </div>
                                <div class="details-review">
                                    <p>Interd umli Aliquam scelerisque. In sollicd itudin gravida tortor. Class aptent tacitd sociosqu ad litoracel torquent. Suspendisse vehicula rhoncus leo. Integer ante bio nunc accumsan sed tempus rutrum. </p>
                                    <div class="autor-date"> <i class="fa fa-quote-left"></i>
                                        <h5>Pergo coctione</h5>
                                        <p>Member of the Club</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="x-navigation navigation"> <a href="javascript:void(0);" class="btn slider-direction prev-page disabled"><i class="icomoon-arrow-left2"></i></a> <a href="javascript:void(0);" class="btn  slider-direction next-page"><i class="icomoon-arrow-right2"></i></a> </div>
                </section>
            </div>
        </div>
    </section>

    <!-- SECTION -->

@endsection
