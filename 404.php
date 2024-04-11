<!DOCTYPE html>
<html lang="en">

<?php 
include "header.php";
?>

        <!-- <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div> --><!-- /.stricky-header --><!-- /.sticky-header__content -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active"> 404 error</li>
                    </ul>
                    <h2> 404 error</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Error Page Start-->
        <section class="error-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__inner">
                            <div class="error-page__title-box">
                                <h2 class="error-page__title">404</h2>
                                <div class="error-page-shape zoom-fade">
                                    <img src="assets/images/shapes/error-page-shape.png" alt="">
                                </div>
                            </div>
                            <h3 class="error-page__tagline">Sorry we can't find that page!</h3>
                            <p class="error-page__text">The page you are looking for was never existed.</p>
                            <form class="error-page__form">
                                <div class="error-page__form-input">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </div>
                            </form>
                            <a href="index.php" class="thm-btn error-page__btn">Back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->

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




        <!-- template js -->
        <script src="assets/js/notech.js"></script>

        <!-- toolbar js -->
        <script src="assets/vendors/toolbar/js/js.cookie.min.js"></script>
        <script src="assets/vendors/toolbar/js/jQuery.style.switcher.min.js"></script>
        <script src="assets/vendors/toolbar/js/toolbar.js"></script>
    </body>

    </html>