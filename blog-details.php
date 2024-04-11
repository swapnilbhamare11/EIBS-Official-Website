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
                <li class="active">Blog Details</li>
            </ul>
            <h2>Blog Details</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Sidebar Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img src="assets/images/blog/blog-details-img-1.jpg" alt="">
                    </div>
                    <div class="blog-details__content">
                        <ul class="list-unstyled blog-details__meta">
                            <li><a href="blog-details.php"><i class="far fa-clock"></i> 8 Jan, 2022</a>
                            </li>
                            <li><a href="blog-details.php"><i class="far fa-user-circle"></i> by Layerdrops</a></li>
                        </ul>
                        <h3 class="blog-details__title">Easy to use software new innovation</h3>
                        <p class="blog-details__text-1">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor. Nulla a erat et orci mattis auctor.</p>
                        <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>
                    </div>
                    <div class="blog-details__bottom">
                        <p class="blog-details__tags">
                            <span>Tags</span>
                            <a href="#">Technology</a>
                            <a href="#">Software</a>
                        </p>
                        <div class="blog-details__social-list">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="blgo-details__pagenation-box">
                        <ul class="list-unstyled blog-details__pagenation">
                            <li>Benefits of using digital technology tools</li>
                            <li>Survived not only five centuries</li>
                        </ul>
                    </div>
                    <div class="comment-one">
                        <h3 class="comment-one__title">2 Comments</h3>
                        <div class="comment-one__single">
                            <div class="comment-one__image">
                                <img src="assets/images/blog/comment-1-1.jpg" alt="">
                            </div>
                            <div class="comment-one__content">
                                <h3>Kevin martin</h3>
                                <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.</p>
                                <a href="blog-details.php" class="thm-btn comment-one__btn">Reply</a>
                            </div>
                        </div>
                        <div class="comment-one__single">
                            <div class="comment-one__image">
                                <img src="assets/images/blog/comment-1-2.jpg" alt="">
                            </div>
                            <div class="comment-one__content">
                                <h3>Saral albertt</h3>
                                <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.</p>
                                <a href="blog-details.php" class="thm-btn comment-one__btn">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h3 class="comment-form__title">Leave a Comment</h3>
                        <form action="https://layerdrops.com/notechhtml/main-html/assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="message" placeholder="Write comment"></textarea>
                                    </div>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest posts</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="far fa-clock"></i> 8 Jan, 2022</span>
                                        <a href="blog-details.php">Can you still get tech benefits?</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="far fa-clock"></i> 8 Jan, 2022</span>
                                        <a href="blog-details.php">Promoting the Rights of Children</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="far fa-clock"></i> 8 Jan, 2022</span>
                                        <a href="blog-details.php">Bring to the table win-win survival strategies</a>
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <li><a href="blog-details.php">Technology <span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li class="active"><a href="blog-details.php">Software <span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li><a href="blog-details.php">Innovations <span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li><a href="blog-details.php">Development <span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li><a href="blog-details.php">Web Design <span class="fa fa-long-arrow-alt-right"></span></a></li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3>
                        <div class="sidebar__tags-list">
                            <a href="#">Technology</a>
                            <a href="#">Software</a>
                            <a href="#">IT</a>
                            <a href="#">Web Development</a>
                            <a href="#">Innovation</a>
                            <a href="#">Solution</a>
                        </div>
                    </div>
                    <div class="sidebar__single sidebar__comments">
                        <h3 class="sidebar__title">Comments</h3>
                        <ul class="sidebar__comments-list list-unstyled">
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p><span>John Doe</span> on Template:</p>
                                    <h5>Comments</h5>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p> <span>John Doe</span> on Template:</p>
                                    <h5>Comments</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Sidebar End-->


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