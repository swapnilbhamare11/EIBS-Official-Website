<!DOCTYPE html>
<html lang="en">

<?php
include "header.php";
?>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Shop</li>
            </ul>
            <h2>Products</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Product Start-->
<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3">
                <div class="product__sidebar">
                    <div class="shop-search product__sidebar-single">
                        <form action="#">
                            <input type="text" placeholder="Search">
                        </form>
                    </div>
                    <div class="product__price-ranger product__sidebar-single">
                        <h3 class="product__sidebar-title">Price</h3>
                        <div class="price-ranger">
                            <div id="slider-range"></div>
                            <div class="ranger-min-max-block">
                                <input type="text" readonly class="min">
                                <span>-</span>
                                <input type="text" readonly class="max">
                                <input type="submit" value="Filter">
                            </div>
                        </div>
                    </div>
                    <div class="shop-category product__sidebar-single">
                        <h3 class="product__sidebar-title">Categories</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Technology</a></li>
                            <li class="active"><a href="#">Software</a></li>
                            <li><a href="#">Innovations</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Web Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9">
                <div class="product__items">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="product__showing-result">
                                <div class="product__showing-text-box">
                                    <p class="product__showing-text">Showing 1–9 of 12 results</p>
                                </div>
                                <div class="product__showing-sort">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Sort by popular">Sort by popular</option>
                                            <option value="1">Sort by popular</option>
                                            <option value="2">Sort by Price</option>
                                            <option value="3">Sort by Ratings</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__all">
                        <div class="row">
                            <!--Product All Single Start-->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__all-single">
                                    <div class="product__all-img">
                                        <img src="assets/images/shop/shop-product-1-1.jpg" alt="">
                                    </div>
                                    <div class="product__all-content">
                                        <div class="product__all-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="product__all-title"><a href="product-details.php">Classy
                                        chair</a></h4>
                                        <p class="product__all-price">$33.00</p>
                                        <div class="product__all-btn-box">
                                            <a href="cart.php" class="thm-btn product__all-btn">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product All Single End-->
                            <!--Product All Single Start-->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__all-single">
                                    <div class="product__all-img">
                                        <img src="assets/images/shop/shop-product-1-2.jpg" alt="">
                                    </div>
                                    <div class="product__all-content">
                                        <div class="product__all-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="product__all-title"><a href="product-details.php">Comfy
                                        chair</a></h4>
                                        <p class="product__all-price">$66.00</p>
                                        <div class="product__all-btn-box">
                                            <a href="cart.php" class="thm-btn product__all-btn">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product All Single End-->
                            <!--Product All Single Start-->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__all-single">
                                    <div class="product__all-img">
                                        <img src="assets/images/shop/shop-product-1-3.jpg" alt="">
                                    </div>
                                    <div class="product__all-content">
                                        <div class="product__all-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="product__all-title"><a href="product-details.php">Boss
                                        chair</a></h4>
                                        <p class="product__all-price">$50.00</p>
                                        <div class="product__all-btn-box">
                                            <a href="cart.php" class="thm-btn product__all-btn">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product All Single End-->
                            <!--Product All Single Start-->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__all-single">
                                    <div class="product__all-img">
                                        <img src="assets/images/shop/shop-product-1-4.jpg" alt="">
                                    </div>
                                    <div class="product__all-content">
                                        <div class="product__all-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="product__all-title"><a href="product-details.php">Sofa
                                        chair</a></h4>
                                        <p class="product__all-price">$89.00</p>
                                        <div class="product__all-btn-box">
                                            <a href="cart.php" class="thm-btn product__all-btn">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product All Single End-->
                            <!--Product All Single Start-->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__all-single">
                                    <div class="product__all-img">
                                        <img src="assets/images/shop/shop-product-1-5.jpg" alt="">
                                    </div>
                                    <div class="product__all-content">
                                        <div class="product__all-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="product__all-title"><a href="product-details.php">Wooden
                                        stool</a></h4>
                                        <p class="product__all-price">$46.00</p>
                                        <div class="product__all-btn-box">
                                            <a href="cart.php" class="thm-btn product__all-btn">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product All Single End-->
                            <!--Product All Single Start-->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__all-single">
                                    <div class="product__all-img">
                                        <img src="assets/images/shop/shop-product-1-6.jpg" alt="">
                                    </div>
                                    <div class="product__all-content">
                                        <div class="product__all-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="product__all-title"><a href="product-details.php">Big
                                        sofa</a></h4>
                                        <p class="product__all-price">$82.00</p>
                                        <div class="product__all-btn-box">
                                            <a href="cart.php" class="thm-btn product__all-btn">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product All Single End-->
                            <!--Product All Single Start-->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__all-single">
                                    <div class="product__all-img">
                                        <img src="assets/images/shop/shop-product-1-7.jpg" alt="">
                                    </div>
                                    <div class="product__all-content">
                                        <div class="product__all-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="product__all-title"><a href="product-details.php">Round
                                        chair</a></h4>
                                        <p class="product__all-price">$36.00</p>
                                        <div class="product__all-btn-box">
                                            <a href="cart.php" class="thm-btn product__all-btn">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product All Single End-->
                            <!--Product All Single Start-->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__all-single">
                                    <div class="product__all-img">
                                        <img src="assets/images/shop/shop-product-1-8.jpg" alt="">
                                    </div>
                                    <div class="product__all-content">
                                        <div class="product__all-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="product__all-title"><a href="product-details.php">Big
                                        stool</a></h4>
                                        <p class="product__all-price">$19.00</p>
                                        <div class="product__all-btn-box">
                                            <a href="cart.php" class="thm-btn product__all-btn">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product All Single End-->
                            <!--Product All Single Start-->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__all-single">
                                    <div class="product__all-img">
                                        <img src="assets/images/shop/shop-product-1-9.jpg" alt="">
                                    </div>
                                    <div class="product__all-content">
                                        <div class="product__all-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="product__all-title"><a href="product-details.php">Classic
                                        chair</a></h4>
                                        <p class="product__all-price">$23.00</p>
                                        <div class="product__all-btn-box">
                                            <a href="cart.php" class="thm-btn product__all-btn">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product All Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Product End-->

<!--Site Footer Start-->
<?php
include "footer.php";
?>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.php" aria-label="logo image"><img src="assets/images/resources/footer-logo.png"
                width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@notech.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>




    <!-- template js -->
    <script src="assets/js/notech.js"></script>

    <!-- toolbar js -->
    <script src="assets/vendors/toolbar/js/js.cookie.min.js"></script>
    <script src="assets/vendors/toolbar/js/jQuery.style.switcher.min.js"></script>
    <script src="assets/vendors/toolbar/js/toolbar.js"></script>
</body>

</html>