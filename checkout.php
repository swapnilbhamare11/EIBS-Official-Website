<!DOCTYPE html>
<html lang="en">

<?php 
    include "header.php";
?>

<!-- <div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div></div> --><!-- /.stricky-header -->

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
            <h2>Checkout</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Start Checkout Page-->
<section class="checkout-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="billing_details">
                    <div class="billing_title">
                        <p>Returning Customer? <span>Click here to Login</span></p>
                        <h2>Billing details</h2>
                    </div>
                    <form class="billing_details_form">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="billing_input_box">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Select a country">Select a country</option>
                                            <option value="1">Canada</option>
                                            <option value="2">England</option>
                                            <option value="3">Australia</option>
                                            <option value="3">USA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row bs-gutter-x-20">
                            <div class="col-xl-6">
                                <div class="billing_input_box">
                                    <input type="text" name="first_name" value="" placeholder="First name"
                                    required="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="billing_input_box">
                                    <input type="text" name="last_name" value="" placeholder="Last name"
                                    required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="billing_input_box">
                                    <input type="text" name="company_name" value="" placeholder="Company">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="billing_input_box">
                                    <input type="text" name="Address" value="" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="billing_input_box">
                                    <input type="text" name="company_name" value=""
                                    placeholder="Appartment, unit, etc. (optional)">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="billing_input_box">
                                    <input type="text" name="Town/City" value="" placeholder="Town / City"
                                    required="">
                                </div>
                            </div>
                        </div>
                        <div class="row bs-gutter-x-20">
                            <div class="col-xl-6">
                                <div class="billing_input_box">
                                    <input type="text" name="State" value="" placeholder="State" required="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="billing_input_box">
                                    <input name="form_zip" type="text" pattern="[0-9]*" placeholder="Zip code">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="billing_input_box">
                                    <input name="email" type="email" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="billing_input_box">
                                    <input type="tel" name="form_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                    required="" placeholder="Phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="checked-box">
                                    <input type="checkbox" name="skipper1" id="skipper" checked="">
                                    <label for="skipper"><span></span>Create an account?</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-xl-6 col-lg-6">
                <div class="billing_details ship_different_address">
                    <div class="billing_title ship_different_address_title">
                        <h2>Ship to a different address <span class="fa fa-check-circle"></span></h2>
                    </div>
                    <form class="billing_details_form ship_different_address_form">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="billing_input_box">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Select a country">Select a country</option>
                                            <option value="1">Canada</option>
                                            <option value="2">England</option>
                                            <option value="3">Australia</option>
                                            <option value="3">USA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row bs-gutter-x-20">
                            <div class="col-xl-6">
                                <div class="billing_input_box">
                                    <input type="text" name="first_name" value="" placeholder="First name"
                                    required="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="billing_input_box">
                                    <input type="text" name="last_name" value="" placeholder="Last name"
                                    required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="billing_input_box">
                                    <input type="text" name="company_name" value="" placeholder="Company">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="billing_input_box">
                                    <input type="text" name="Address" value="" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="billing_input_box">
                                    <input type="text" name="company_name" value=""
                                    placeholder="Appartment, unit, etc. (optional)">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="billing_input_box">
                                    <input type="text" name="Town/City" value="" placeholder="Town / City"
                                    required="">
                                </div>
                            </div>
                        </div>
                        <div class="row bs-gutter-x-20">
                            <div class="col-xl-6">
                                <div class="billing_input_box">
                                    <input type="text" name="State" value="" placeholder="State" required="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="billing_input_box">
                                    <input name="form_zip" type="text" pattern="[0-9]*" placeholder="Zip code">
                                </div>
                            </div>
                        </div>

                        <div class="row bs-gutter-x-20">
                            <div class="col-xl-6">
                                <div class="billing_input_box">
                                    <input name="email" type="email" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="billing_input_box">
                                    <input type="tel" name="form_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                    required="" placeholder="Phone">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="ship_different_input">
                                    <textarea placeholder="Notes about order"
                                    name="form_order_notes"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="your_order">
            <h2>Your order</h2>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="order_table_box">
                        <table class="order_table_detail">
                            <thead class="order_table_head">
                                <tr>
                                    <th>Product</th>
                                    <th class="right">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pro__title">Product Name</td>
                                    <td class="pro__price">$10.99 USD</td>
                                </tr>
                                <tr>
                                    <td class="pro__title">Subtotal</td>
                                    <td class="pro__price">$10.99 USD</td>
                                </tr>
                                <tr>
                                    <td class="pro__title">Shipping</td>
                                    <td class="pro__price">$0.00 USD</td>
                                </tr>
                                <tr>
                                    <td class="pro__title">Total</td>
                                    <td class="pro__price">$20.98 USD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="checkout__payment">
                        <div class="checkout__payment__item checkout__payment__item--active">
                            <h3 class="checkout__payment__title">Direct bank transfer</h3>
                            <div class="checkout__payment__content">
                                Make your payment directly into our bank account. Please
                                use your Order ID as the payment reference. Your order
                                wont be shipped until the funds have cleared.
                            </div><!-- /.checkout__payment__content -->
                        </div><!-- /.checkout__payment__item -->
                        <div class="checkout__payment__item">
                            <h3 class="checkout__payment__title">Paypal payment <img
                                src="assets/images/shop/paypal-1.jpg" alt=""></h3>
                                <div class="checkout__payment__content">
                                    Make your payment directly into our bank account. Please
                                    use your Order ID as the payment reference. Your order
                                    wont be shipped until the funds have cleared.
                                </div><!-- /.checkout__payment__content -->
                            </div><!-- /.checkout__payment__item -->
                        </div><!-- /.checkout__payment -->
                        <div class="text-right d-flex justify-content-end">
                            <a href="checkout.php" class="thm-btn">Place your order</a>
                        </div><!-- /.text-right -->

                    </div><!-- /.col-lg-6 -->
                </div>
            </div>
        </div>
    </section>
    <!--End Checkout Page-->

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