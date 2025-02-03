<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nayana</title>
  <link rel="icon" href="assets/nayana-img/ng-fav.png">
  <link rel="apple-touch-icon" href="assets/nayana-img/ng-fav.png">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/meanmenu.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
  /* Optional: Smooth transition for the sticky effect */
          .sticky {
              position: fixed;
              top: 0;
              width: 100%;
              z-index: 1020;
              /* Keeps the header above other elements */
              transition: top 0.3s;
          }
  
          /* Optional padding to prevent content overlap */
          .content {
              padding-top: 80px;
          }
  
          .smt {
              scroll-margin-top: 12vh;
          }
  </style>
</head>

<body>



<!-- Button to trigger the modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal"> Enquiry Now
</button>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Contact Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your Form -->
                <form action="detail-form.php" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name*" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email*" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone*" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="message" placeholder="Write a Message" required></textarea>
                    </div>
                    <!-- Uncomment if you want to use reCAPTCHA -->
                    <!--
                    <div class="mb-3">
                        <input type="hidden" id="recaptchaToken" name="recaptchaToken">
                        <div class="g-recaptcha" data-sitekey="6LcrHfcpAAAAAN1UvB8-0ZjLJ0hkrpkPSi9zX4C7" data-callback="onRecaptchaSuccess"></div>
                    </div>
                    -->
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Submit Now</button>
                        <!-- Uncomment if you want to show a submission message -->
                        <!--
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                        -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

  <!-- Cursor Animation -->
  <div class="cursor1">
  </div>
  <div class="cursor2">
  </div>
  <!-- ==================== Start mobile menu ================= -->
  <div class="zq_mobile_menu">
    <div class="logo icon-img-100">
      <img src="assets/nayana-img/logo.png" alt="">
    </div>
    <div class="close-menu cursor-pointer ti-close">
      <i class="fa-sharp fa-light fa-xmark"></i>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div class="menu-text">
            <div class="text">
              <h2>Menu</h2>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="menu-navbar">
            <ul class="main-menu">
              <li>
                <div class="overflow-hidden">
                  <a href="#home" class="link cursor-pointer dmenu">
                    <span class="fill-text" data-text="Home">Home</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="overflow-hidden">
                  <a href="#aboutUs" class="link cursor-pointer dmenu">About us</a>
                </div>
              </li>
              <li>
                <div class="overflow-hidden">
                  <a href="#projects" class="link cursor-pointer dmenu">
                    <span class="fill-text" data-text="Recent Projects">Recent Projects</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="overflow-hidden">
                  <a href="#price" class="link cursor-pointer dmenu">
                    <span class="fill-text" data-text="Packages">Packages</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="overflow-hidden">
                  <a href="#feedback" class="link cursor-pointer dmenu">
                    <span class="fill-text" data-text="Feedback">Feedback</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="overflow-hidden">
                  <a href="#faq" class="link cursor-pointer dmenu">
                    <span class="fill-text" data-text="FAQ's">FAQ's</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="overflow-hidden">
                  <a href="#contactUs" class="link cursor-pointer dmenu">
                    <span class="fill-text" data-text="Contact Us">Contact Us</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==================== End Navbar ==================== -->
  <!-- search start area -->
  <div class="ba-search-popup">
    <div class="ba-color-layer">
    </div>
    <div class="ba-search-popup-inner">
      <form action="#">
        <input type="text" placeholder="Search here..." name="search" id="search-input">
        <button type="submit">
          <i class="fal fa-search"></i>
        </button>
      </form>
    </div>
  </div>
  <!-- search start end -->
  <div class="has-smooth" id="has_smooth">
  </div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">
        <!-- Start Header area -->
        <header class="zq_h2_header-area header" id="myHeader">
          <div class="container">
            <div class="zq_h2_header-wrap zq_h4_header-wrap sticky-top">
              <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-sm-6 col-8">
                  <div class="zq_h2_header-left">
                    <div class="zq_h2_header-logo">
                      <a href="#">
                        <img src="./assets/nayana-img/logo.png" alt="">
                      </a>
                    </div>
                    <div class="zq_h2_header-menu">
                      <nav id="mobile-menu">
                        <ul>
                          <li>
                            <div class="overflow-hidden">
                              <a href="#home" class="link cursor-pointer dmenu">
                                <span class="fill-text" data-text="Home">Home</span>
                              </a>
                            </div>
                          </li>
                          <li>
                            <div class="overflow-hidden">
                              <a href="#aboutUs" class="link cursor-pointer dmenu">
                                <span class="fill-text" data-text="About Us">About Us</span>
                              </a>
                            </div>
                          </li>
                          <li>
                            <div class="overflow-hidden">
                              <a href="#projects" class="link cursor-pointer dmenu">
                                <span class="fill-text" data-text="Recent Projects">Recent Projects</span>
                              </a>
                            </div>
                          </li>
                          <li>
                            <div class="overflow-hidden">
                              <a href="#price" class="link cursor-pointer dmenu">
                                <span class="fill-text" data-text="Packages">Packages</span>
                              </a>
                            </div>
                          </li>
                          <li>
                            <div class="overflow-hidden">
                              <a href="#feedback" class="link cursor-pointer dmenu">
                                <span class="fill-text" data-text="Feedback">Feedback</span>
                              </a>
                            </div>
                          </li>
                          <li>
                            <div class="overflow-hidden">
                              <a href="#faq" class="link cursor-pointer dmenu">
                                <span class="fill-text" data-text="FAQ's">FAQ's</span>
                              </a>
                            </div>
                          </li>
                          <li>
                            <div class="overflow-hidden">
                              <a href="#contactUs" class="link cursor-pointer dmenu">
                                <span class="fill-text" data-text="FAQ's">Contact Us</span>
                              </a>
                            </div>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- end Header area -->
        <main class="content">
          <!-- hero area start -->
          <section id="home" class="zq_h4_hero-area">
            <!-- <img src="assets/images/hero/h4_shape-1.png" alt="" class="zq_h4_hero-shape-1">
            <img src="assets/images/hero/h4_shape-2.png" alt="" class="zq_h4_hero-shape-2">
            <img src="assets/images/hero/h4_shape-3.png" alt="" class="zq_h4_hero-shape-3"> -->
            <div class="container">
              <div class="row justify-content-between align-items-center">
                <div class="col-xxl-7 col-lg-7">
                  <div class="zq_h4_hero-content">
                    <h1 class="zq_h4_hero-content-title">Get the Best Quality
                      <span>E-commerce Web Solution</span>
                    </h1>
                    <p>At Techsters, we provide top-notch e-commerce web solutions tailored to meet your business needs. Our expert team is dedicated to delivering high-quality, user-friendly, and secure platforms that help you thrive in the digital marketplace. Trust us to Grow your online presence with innovative and reliable e-commerce solutions.</p>
                    <div class="zq_h4_hero-content-admin">
                      <img src="assets/images/choose/h3_admin.png" alt="">
                      <h4>10K+
                        <span>Trusted Clients</span>
                      </h4>
                      <div>
                        <a href="tel:+91 888 552 6751">
                          <lord-icon src="https://cdn.lordicon.com/tftaqjwp.json" trigger="loop" colors="primary:#fff" style="width:25px;height:25px;margin-bottom: -6px;">
                          </lord-icon>+91 888 552 6751</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-5 col-lg-5">
                <div class="zq_h4_hero-form mb-40 mb-lg-0">
<form action="detail-form.php" method="POST">
    <input type="text" name="name" placeholder="Name*" required>
    <input type="email" name="email" placeholder="Email*" required>
    <input type="tel" name="phone" placeholder="Phone*" required>
    <textarea name="message" placeholder="Write a Message" required></textarea>
    <!--<input type="hidden" id="recaptchaToken" name="recaptchaToken">-->
    <!--<div class="g-recaptcha" data-sitekey="6LcrHfcpAAAAAN1UvB8-0ZjLJ0hkrpkPSi9zX4C7" data-callback="onRecaptchaSuccess">
    </div> -->

    <div class="text-center">
        <button name="submit" type="submit">Submit Now</button>
        <!--<div id="msgSubmit" class="h3 text-center hidden"></div>-->
        <!--<div class="clearfix"></div>-->
    </div>

</form>
</div>
                </div>
              </div>
            </div>
          </section>
          <!-- hero area end -->
          <!-- about us start -->
          <section class="zq_brand-area bg-padding zq_border-bottom">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="zq_section-area mb-45 text-center">
                    <span class="zq_section-subtitle">MEET OUR TRUSTED CLIENTS</span>
                  </div>
                </div>
              </div>
              <div class="swiper h4_brand-active">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="zq_brand-item">
                      <img src="./assets/img/clients/nay-1.jpg" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="zq_brand-item">
                      <img src="./assets/img/clients/nay-2.jpg" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="zq_brand-item">
                      <img src="./assets/img/clients/nay-3.jpg" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="zq_brand-item">
                      <img src="./assets/img/clients/nay-4.jpg" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="zq_brand-item">
                      <img src="./assets/img/clients/nay-5.jpg" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="zq_brand-item">
                      <img src="./assets/img/clients/nay-6.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- about us end -->
          <!-- About Us start -->
          <section id="aboutUs" class="zq_h3_choose-area bg-padding  smt">
            <div class="container">
              <div class="row justify-content-between align-items-center">
                <div class="col-xxl-6 col-lg-6">
                  <div class="zq_h3_section-area">
                    <span class="zq_h3_section-subtitle mb-20">About Us</span>
                    <h2 class="zq_h3_section-title mb-40">Welcome to Nayana Group</h2>
                    <p>Techsters(Hi-Techsters IT Services Pvt Ltd.) is a group of enthusiastic and passionate group of people who are working collectively to bring some great TECH things into this fast moving world. Despite the IT Revolution, many problematic areas need to be addressed yet.</p>
                    <p>We're your creative partners, crafting innovative solutions that blend cutting-edge technology with personalized customer care.</p>
                  </div>
                  <div class="zq_h3_choose-content">
                    <div class="zq_h3_choose-content-item mb-25">
                      <div class="zq_h3_choose-content-item-icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_268_352)">
                            <path d="M27.7774 8.61111C26.6663 8.61111 25.6478 8.61111 24.7219 8.61111C22.7774 8.61111 21.3885 7.22222 21.3885 5.27778C21.3885 4.25926 21.3885 3.24074 21.3885 2.22222C21.1108 2.22222 20.9256 2.22222 20.7404 2.22222C17.1293 2.22222 13.6108 2.22222 9.99966 2.22222C8.88855 2.22222 8.51818 2.59259 8.51818 3.7037C8.51818 4.25926 8.51818 4.81482 8.51818 5.37037C8.51818 6.01852 8.05522 6.48148 7.40707 6.48148C6.85151 6.38889 6.48114 5.92593 6.38855 5.27778C6.38855 4.53704 6.38855 3.7963 6.38855 3.05556C6.48114 1.38889 7.87003 0 9.5367 0C13.796 0 18.0552 0 22.4071 0C22.7774 0 23.1478 0.185185 23.4256 0.462963C25.4626 2.5 27.4997 4.53704 29.5367 6.57407C29.8145 6.85185 29.9997 7.31481 29.9997 7.59259C29.9997 13.9815 29.9997 20.2778 29.9997 26.6667C29.9997 28.5185 28.6108 29.9074 26.7589 29.9074C22.5923 29.9074 18.333 29.9074 14.1663 29.9074C13.4256 29.9074 12.87 29.4444 12.87 28.7963C12.87 28.1481 13.333 27.6852 14.1663 27.6852C18.2404 27.6852 22.3145 27.6852 26.3885 27.6852C27.4997 27.6852 27.87 27.3148 27.87 26.2037C27.87 20.463 27.87 14.8148 27.87 9.07407C27.7774 9.07407 27.7774 8.88889 27.7774 8.61111ZM23.6108 3.88889C23.4256 6.2037 23.8885 6.66667 26.1108 6.38889C25.2774 5.55556 24.4441 4.72222 23.6108 3.88889Z" fill="currentColor" />
                            <path d="M6.38855 27.2222C5.55522 28.0555 4.81448 28.7962 4.07374 29.537C3.70337 29.9074 3.333 30.1851 2.77744 29.9074C2.22189 29.7222 2.0367 29.2592 2.0367 28.7036C2.0367 25.9259 2.0367 23.1481 2.0367 20.3703C2.0367 20.0925 1.85152 19.7222 1.66633 19.537C-0.370706 17.3148 -0.741076 14.1666 0.925591 11.6666C2.49966 9.16661 5.55522 8.0555 8.333 8.98143C11.1108 9.90735 12.9626 12.5925 12.7774 15.5555C12.6848 17.037 12.0367 18.4259 11.0182 19.537C10.833 19.8148 10.6478 20.1851 10.6478 20.5555C10.6478 23.2407 10.6478 26.0185 10.6478 28.7036C10.6478 29.2592 10.5552 29.8148 9.90707 30.0925C9.25892 30.3703 8.88855 29.9999 8.51818 29.6296C7.87003 28.7036 7.22189 27.9629 6.38855 27.2222ZM10.7404 14.9999C10.7404 12.5925 8.79596 10.7407 6.38855 10.7407C4.07374 10.7407 2.12929 12.6851 2.12929 15.0925C2.12929 17.4074 4.07374 19.3518 6.38855 19.3518C8.79596 19.2592 10.7404 17.3148 10.7404 14.9999ZM4.35152 26.1111C4.44411 26.1111 4.44411 26.2036 4.5367 26.2036C4.72189 26.0185 4.90707 25.7407 5.09226 25.5555C5.18485 25.3703 5.37003 25.1851 5.55522 24.9999C6.20337 24.4444 6.66633 24.4444 7.31448 24.9999C7.68485 25.3703 8.05522 25.7407 8.51818 26.2962C8.51818 24.4444 8.51818 22.7777 8.51818 21.0185C7.12929 21.4814 5.7404 21.4814 4.35152 21.0185C4.35152 22.7777 4.35152 24.4444 4.35152 26.1111Z" fill="currentColor" />
                            <path d="M19.2589 24.6296C17.4997 24.6296 15.833 24.6296 14.0738 24.6296C13.2404 24.6296 12.7775 24.2593 12.7775 23.6111C12.7775 22.963 13.2404 22.5 13.9812 22.5C17.4071 22.5 20.9256 22.5 24.3515 22.5C24.9071 22.5 25.4627 22.6852 25.5552 23.2407C25.6478 23.6111 25.4627 24.0741 25.1849 24.3519C24.9997 24.537 24.6293 24.6296 24.2589 24.6296C22.6849 24.6296 20.9256 24.6296 19.2589 24.6296Z" fill="currentColor" />
                            <path d="M20.3704 13.8889C18.9815 13.8889 17.6852 13.8889 16.2963 13.8889C15.463 13.8889 15 13.4259 15 12.7778C15 12.1296 15.463 11.7593 16.2963 11.7593C18.9815 11.7593 21.7593 11.7593 24.4444 11.7593C25.1852 11.7593 25.7407 12.2222 25.7407 12.8704C25.7407 13.5185 25.2778 13.9815 24.4444 13.9815C23.0556 13.8889 21.6667 13.8889 20.3704 13.8889Z" fill="currentColor" />
                            <path d="M20.2778 19.2593C18.9815 19.2593 17.5926 19.2593 16.2963 19.2593C15.463 19.2593 15 18.8889 15 18.2408C15 17.5926 15.463 17.1296 16.2963 17.1296C18.9815 17.1296 21.6667 17.1296 24.3519 17.1296C25.1852 17.1296 25.6481 17.5 25.6481 18.2408C25.6481 18.8889 25.1852 19.2593 24.3519 19.2593C22.963 19.2593 21.6667 19.2593 20.2778 19.2593Z" fill="currentColor" />
                            <path d="M15.5553 8.61108C14.7219 8.61108 13.8886 8.61108 13.0553 8.61108C12.3145 8.61108 11.8516 8.14811 11.8516 7.59256C11.8516 6.94441 12.3145 6.48145 13.0553 6.48145C14.7219 6.48145 16.4812 6.48145 18.1479 6.48145C18.8886 6.48145 19.3516 6.94441 19.3516 7.59256C19.3516 8.2407 18.8886 8.61108 18.2405 8.61108C17.2219 8.61108 16.3886 8.61108 15.5553 8.61108Z" fill="currentColor" />
                          </g>
                        </svg>
                      </div>
                      <div class="zq_h3_choose-content-item-info">
                        <h4>Software Business</h4>
                        <p>A software business develops and sells digital solutions to meet customer needs. It focuses on creating, delivering, and supporting software products or services.</p>
                      </div>
                    </div>
                    <div class="zq_h3_choose-content-item mb-25">
                      <div class="zq_h3_choose-content-item-icon">
                        <svg width="28" height="33" viewBox="0 0 28 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_268_366)">
                            <path d="M10.0031 32.5C10.0031 29.9813 10.0031 27.5613 10.0031 25.1413C10.0031 24.598 9.8538 24.3017 9.40601 24.0054C6.57002 22.0793 3.78378 20.1038 0.997542 18.1777C0.599508 17.8814 0.5 17.585 0.5 17.1405C0.549754 15.9552 0.5 14.7206 0.5 13.4859C0.84828 13.4859 1.09705 13.4365 1.39558 13.4365C1.6941 10.3745 3.33599 8.49774 6.42075 7.80632C4.03255 6.81857 2.98771 5.18878 3.4355 3.21328C3.83353 1.48472 5.42567 0.200649 7.26658 0.250036C9.05773 0.299424 10.6001 1.63288 10.8986 3.36145C11.1972 5.38633 10.1523 6.96673 7.86363 7.75693C10.9484 8.44835 12.64 10.3251 12.8888 13.3871C13.4859 13.3871 14.0829 13.3871 14.68 13.3871C14.9785 10.3251 16.6204 8.44835 19.7051 7.75693C17.3169 6.76918 16.3218 5.13939 16.7199 3.1639C17.1179 1.38595 18.7598 0.151261 20.6007 0.200649C22.3919 0.250036 23.9342 1.63288 24.183 3.36145C24.4815 5.38633 23.3869 6.96673 21.148 7.70754C24.2328 8.39896 25.9244 10.2757 26.2229 13.3377C26.5215 13.3377 26.7702 13.3871 27.1185 13.3871C27.1185 14.3748 27.019 15.3626 27.1185 16.3503C27.218 17.3381 26.8697 17.8814 26.0737 18.4246C23.3869 20.2026 20.75 22.1287 18.0632 23.956C17.715 24.2029 17.6155 24.4005 17.6155 24.845C17.6652 26.5242 17.6155 28.1539 17.6155 29.8825C15.1277 30.7715 12.5903 31.6111 10.0031 32.5ZM11.9435 29.8331C13.0878 29.438 14.1327 29.0923 15.2273 28.7466C15.6253 28.6478 15.7745 28.4503 15.7248 28.0552C15.675 26.6723 15.7248 25.3389 15.7248 23.956C15.7248 23.5115 15.8741 23.2646 16.2223 23.0176C18.9091 21.1903 21.5958 19.2642 24.382 17.4369C25.2279 16.8936 25.3771 16.2516 25.1781 15.3626C17.6155 15.3626 10.0528 15.3626 2.49017 15.3626C2.29115 16.2516 2.49017 16.8936 3.28624 17.4369C6.02272 19.2642 8.70945 21.1903 11.4459 23.067C11.7942 23.314 11.9435 23.5609 11.9435 24.0054C11.8937 25.9315 11.9435 27.8576 11.9435 29.8331ZM3.38575 13.4365C5.92321 13.4365 8.41092 13.4365 10.9484 13.4365C10.9484 12.0536 10.3016 11.0165 9.15724 10.2757C7.86363 9.48549 6.52026 9.48549 5.22665 10.2263C4.03255 10.9671 3.4355 12.0042 3.38575 13.4365ZM16.7199 13.4365C19.2573 13.4365 21.7451 13.4365 24.2825 13.4365C24.2825 12.0536 23.6357 10.9671 22.4914 10.2757C21.1978 9.48549 19.8046 9.48549 18.4613 10.2757C17.3169 10.9671 16.7199 12.0536 16.7199 13.4365ZM9.05773 4.00348C9.05773 2.96635 8.21191 2.12676 7.16707 2.12676C6.12223 2.12676 5.27641 2.96635 5.32616 4.05287C5.32616 5.09001 6.17198 5.92959 7.21682 5.92959C8.21191 5.8802 9.05773 5.04062 9.05773 4.00348ZM22.3919 4.05287C22.3919 3.01573 21.546 2.17615 20.5012 2.17615C19.4564 2.17615 18.6105 3.01573 18.6105 4.05287C18.6105 5.09001 19.4564 5.92959 20.5012 5.92959C21.4963 5.92959 22.3421 5.09001 22.3919 4.05287Z" fill="currentColor" />
                          </g>
                        </svg>
                      </div>
                      <div class="zq_h3_choose-content-item-info">
                        <h4>Business Leading</h4>
                        <p>"Empowering business with strategic vision and innovation to drive growth. Lead with purpose, inspire with action."</p>
                      </div>
                    </div>
                    <!-- <div class="zq_h3_choose-content-bottom pt-20">
                                            <a href="#" class="zq_theme-btn">Learn More</a>
                                            <div class="zq_h3_choose-content-admin">
                                                <img src="assets/images/choose/h3_admin.png" alt="">
                                                <h4>10K+
                                                    <span>Trusted Clients</span>
                                                </h4>
                                            </div>
                                        </div> -->
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="zq_h3_choose-img ml-45 mt-40 mt-lg-0">
                    <img src="assets/img/about-img.jpg" alt="" class="w-100 zq_h3_choose-img-inner">
                    <img src="assets/images/choose/h3_shape-1.png" alt="" class="zq_h3_choose-img-shape-1">
                    <!-- <img src="assets/images/choose/h3_shape-2.png" alt=""
                                            class="zq_h3_choose-img-shape-2"> -->
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- About Us end -->
          <!-- service area start -->
          <section class="zq_h4_service-area bg-padding">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-8">
                  <div class="zq_section-area text-center">
                    <span class="zq_section-subtitle">day-to-day operations</span>
                    <h2 class="zq_section-title mb-40">Innovation & Precision at in Every Step</h2>
                  </div>
                </div>
              </div>
              <div class="zq_h4_service-wrap">
                <div class="zq_h4_service-item mb-25">
                  <span class="zq_h4_service-item-number">1</span>
                  <div class="zq_h4_service-item-img">
                    <img src="assets/img/step-1.jpg" alt="">
                  </div>
                  <div class="zq_h4_service-item-content">
                    <h3>Plan Your E-commerce Strategy</h3>
                    <p>Define your products, target audience, and brand identity. Choose the type of e-commerce platform (like Shopify or WordPress with WooCommerce) that suits your business needs. This planning phase helps you create a clear blueprint for your website.</p>
                  </div>
                </div>
                <div class="zq_h4_service-item mb-30">
                  <span class="zq_h4_service-item-number">2</span>
                  <div class="zq_h4_service-item-img d-block d-lg-none">
                    <img src="assets/img/step-2.jpg" alt="">
                  </div>
                  <div class="zq_h4_service-item-content">
                    <h3>Design and Build the Website</h3>
                    <p>Set up your website by customizing your platform's design template, adding essential pages (home, product, cart, checkout), and ensuring it’s mobile-friendly. Make sure to create a seamless and visually appealing shopping experience.</p>
                  </div>
                  <div class="zq_h4_service-item-img d-none d-lg-block">
                    <img src="assets/img/step-2.jpg" alt="">
                  </div>
                </div>
                <div class="zq_h4_service-item mb-25">
                  <span class="zq_h4_service-item-number">3</span>
                  <div class="zq_h4_service-item-img">
                    <img src="assets/img/step-3.jpg" alt="">
                  </div>
                  <div class="zq_h4_service-item-content">
                    <h3>Launch and Optimize</h3>
                    <p>Test everything—payment methods, checkout flow, and mobile responsiveness. Once it's all set, launch your site. Use analytics and customer feedback to continually optimize your website for better performance and sales growth.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- service area end -->
          <!-- project area start -->
          <!-- <section class="zq_h4_project-area">
                        <div class="zq_common_width-3">
                            <div class="zq_common_width-3_inner pt-95 pb-100">
                                <div class="container">
                                    <div class="row justify-content-between align-items-end">
                                        <div class="col-xxl-5 col-lg-6 col-md-8">
                                            <div class="zq_section-area">
                                                <span class="zq_section-subtitle mb-20">Our Projects</span>
                                                <h2 class="zq_section-title mb-40">Innovative Solutions Tailored Diverse
                                                    Business</h2>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="zq_navigation justify-content-md-end mb-50">
                                                <div class="h4_project-prev"><i class="fa-solid fa-angle-left"></i>
                                                </div>
                                                <div class="h4_project-next"><i class="fa-solid fa-angle-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper h4_project-active">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="zq_h4_project-item">
                                                    <div class="zq_h4_project-item-img">
                                                        <a href="proect-details.html"><img
                                                                src="assets/images/project/h4_1.png" alt=""></a>
                                                    </div>
                                                    <div class="zq_h4_project-item-content">
                                                        <h3><a href="project-details.html">TechVantage</a></h3>
                                                        <span>$ 48,00 USD <del>$ 48,00 USD</del></span>
                                                        <a href="#" class="zq_h4_project-item-btn">View Project</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="zq_h4_project-item">
                                                    <div class="zq_h4_project-item-img">
                                                        <a href="proect-details.html"><img
                                                                src="assets/images/project/h4_2.png" alt=""></a>
                                                    </div>
                                                    <div class="zq_h4_project-item-content">
                                                        <h3><a href="project-details.html">LogicLeap</a></h3>
                                                        <span>$ 48,00 USD <del>$ 48,00 USD</del></span>
                                                        <a href="#" class="zq_h4_project-item-btn">View Project</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="zq_h4_project-item">
                                                    <div class="zq_h4_project-item-img">
                                                        <a href="proect-details.html"><img
                                                                src="assets/images/project/h4_3.png" alt=""></a>
                                                    </div>
                                                    <div class="zq_h4_project-item-content">
                                                        <h3><a href="project-details.html">DigitalNest</a></h3>
                                                        <span>$ 48,00 USD <del>$ 48,00 USD</del></span>
                                                        <a href="#" class="zq_h4_project-item-btn">View Project</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="zq_h4_project-item">
                                                    <div class="zq_h4_project-item-img">
                                                        <a href="proect-details.html"><img
                                                                src="assets/images/project/h4_4.png" alt=""></a>
                                                    </div>
                                                    <div class="zq_h4_project-item-content">
                                                        <h3><a href="project-details.html">DataDynamo</a></h3>
                                                        <span>$ 48,00 USD <del>$ 48,00 USD</del></span>
                                                        <a href="#" class="zq_h4_project-item-btn">View Project</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
          <!-- project area end -->
          <!-- project area start -->
          <section id="projects" class="zq_project-area smt">
            <div class="zq_common_width">
              <div class="zq_common_width_inner bg-padding">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                      <div class="zq_section-area text-center">
                        <span class="zq_section-subtitle mb-20">Recent Projects</span>
                        <h2 class="zq_section-title mb-40">Our Portfolio Highlights</h2>
                      </div>
                    </div>
                  </div>
                  <div class="zq_project-wrapper">
                    <div class="zq_project-single pr-40">
                      <div class="zq_project-item">
                        <div class="zq_project-img">
                          <a target="_blank" href="https://store.monarchergo.com/">
                            <img src="./assets/img/project-1.png" alt="">
                          </a>
                        </div>
                        <div class="zq_project-content">
                          <div class="zq_project-content-head">
                            <h3 class="zq_project-content-title">
                              <a href="https://store.monarchergo.com/" target="_blank">Monarch</a>
                            </h3>
                            <a target="_blank" href="https://store.monarchergo.com/" class="zq_project-content-btn">
                              <i class="fa-light fa-arrow-up-right"></i>
                            </a>
                          </div>
                          <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et
                                                        massa mi. Aliquam in hendrerit urna pellentesque sitame.</p> -->
                        </div>
                      </div>
                      <div class="zq_project-item">
                        <div class="zq_project-img">
                          <a target="_blank" href="https://grocery.brightnous.com/">
                            <img src="assets/img/project-2.png" alt="">
                          </a>
                        </div>
                        <div class="zq_project-content">
                          <div class="zq_project-content-head">
                            <h3 class="zq_project-content-title">
                              <a target="_blank" href="https://grocery.brightnous.com/">Grocery</a>
                            </h3>
                            <a target="_blank" href="https://grocery.brightnous.com/" class="zq_project-content-btn">
                              <i class="fa-light fa-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="zq_project-item">
                        <div class="zq_project-img">
                          <a target="_blank" href="https://picklejars.in/">
                            <img src="assets/img/project-3.png" alt="">
                          </a>
                        </div>
                        <div class="zq_project-content">
                          <div class="zq_project-content-head">
                            <h3 class="zq_project-content-title">
                              <a target="_blank" href="https://picklejars.in/">Pickle Jars</a>
                            </h3>
                            <a target="_blank" href="https://picklejars.in/" class="zq_project-content-btn">
                              <i class="fa-light fa-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="zq_project-item">
                        <div class="zq_project-img">
                          <a target="_blank" href="https://jolaali.in/">
                            <img src="assets/img/jolali.png" alt="">
                          </a>
                        </div>
                        <div class="zq_project-content">
                          <div class="zq_project-content-head">
                            <h3 class="zq_project-content-title">
                              <a target="_blank" href="https://jolaali.in/">Jolali</a>
                            </h3>
                            <a target="_blank" href="https://jolaali.in/" class="zq_project-content-btn">
                              <i class="fa-light fa-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="zq_project-single pl-40">
                      <div class="zq_project-client">
                        <div class="zq_project-client-img">
                          <img src="assets/images/bg/p1.png" alt="">
                          <img src="assets/images/bg/p2.png" alt="">
                          <img src="assets/images/bg/p3.png" alt="">
                        </div>
                        <div class="zq_project-client-info">
                          <h3>10K+</h3>
                          <p>Trusted Clients</p>
                        </div>
                      </div>
                      <div class="zq_project-item">
                        <div class="zq_project-img">
                          <a target="_blank" href="https://livecoaching.in/">
                            <img src="assets/img/project-4.png" alt="">
                          </a>
                        </div>
                        <div class="zq_project-content">
                          <div class="zq_project-content-head">
                            <h3 class="zq_project-content-title">
                              <a target="_blank" href="https://livecoaching.in/">Live Coaching</a>
                            </h3>
                            <a target="_blank" href="https://livecoaching.in/" class="zq_project-content-btn">
                              <i class="fa-light fa-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="zq_project-item">
                        <div class="zq_project-img">
                          <a target="_blank" href="https://hairstyles.brightnous.com/">
                            <img src="assets/img/project-5.png" alt="">
                          </a>
                        </div>
                        <div class="zq_project-content">
                          <div class="zq_project-content-head">
                            <h3 class="zq_project-content-title">
                              <a href="https://hairstyles.brightnous.com/">Hair Styles</a>
                            </h3>
                            <a target="_blank" href="https://hairstyles.brightnous.com/" class="zq_project-content-btn">
                              <i class="fa-light fa-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="zq_project-item">
                        <div class="zq_project-img">
                          <a target="_blank" href="https://freshmeat.brightnous.com/">
                            <img src="assets/img/project-6.png" alt="">
                          </a>
                        </div>
                        <div class="zq_project-content">
                          <div class="zq_project-content-head">
                            <h3 class="zq_project-content-title">
                              <a href="https://freshmeat.brightnous.com/">Fresh Meat In Mart</a>
                            </h3>
                            <a href="https://freshmeat.brightnous.com/" class="zq_project-content-btn">
                              <i class="fa-light fa-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="zq_project-item">
                        <div class="zq_project-img">
                          <a target="_blank" href="https://bullionfortune.com/">
                            <img src="assets/img/fartune.png" alt="">
                          </a>
                        </div>
                        <div class="zq_project-content">
                          <div class="zq_project-content-head">
                            <h3 class="zq_project-content-title">
                              <a href="https://bullionfortune.com/">Bullion Fortune</a>
                            </h3>
                            <a href="https://bullionfortune.com/" class="zq_project-content-btn">
                              <i class="fa-light fa-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="zq_project-btn text-center pt-20">
                                        <a href="portfolio.html" class="zq_theme-btn">More Projects</a>
                                    </div> -->
                </div>
              </div>
            </div>
          </section>
          <!-- project area end -->
          <!-- price area start -->
          <section id="price" class="zq_h2_price-area pt-95 pb-70 smt package_section">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12">
                  <div class="zq_section-area text-center">
                    <span class="zq_section-subtitle mb-20">Our Packages</span>
                    <h3 class="zq_section-title mb-40">Your Journey Starts Here – Pick a Package</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 left_side_pak_cards">
                  <h2>Website Worth of Rs 60,000</h2>
                  <div class="pack_cards">
                    <h3>Website Development</h3>
                    <li>
                      <i class="fa-solid fa-check"></i>A website with 10 Pages</li>
                    <li>
                      <i class="fa-solid fa-check"></i>Blog Unlimited Pages</li>
                    <li>
                      <i class="fa-solid fa-check"></i>Events Unlimited</li>
                    <li>
                      <i class="fa-solid fa-check"></i>Gallery Upload</li>
                    <li>
                      <i class="fa-solid fa-check"></i>Testimonials</li>
                    <li>
                      <i class="fa-solid fa-check"></i>Content Creation</li>
                    <li>
                      <i class="fa-solid fa-check"></i>Chat Bot integration</li>
                  </div>
                </div>
                <div class="col-md-8 right_side_pak_cards">
                  <h2>Digital Marketing worth of Rs 63000</h2>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="pack_cards">
                        <h3>GMB Rs 5000</h3>
                        <li>
                          <i class="fa-solid fa-check"></i>GMB Creation</li>
                        <li>
                          <i class="fa-solid fa-check"></i>GMB Optimization</li>
                        <li>
                          <i class="fa-solid fa-check"></i>GMB Posting</li>
                        <li>
                          <i class="fa-solid fa-check"></i>10 Reviews</li>
                        <li>
                          <i class="fa-solid fa-check"></i>ORM</li>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="pack_cards">
                        <h3>SEO worth of Rs 20000</h3>
                        <li>
                          <i class="fa-solid fa-check"></i>SEO for 2 keywords</li>
                        <li>
                          <i class="fa-solid fa-check"></i>Blog Article -1</li>
                        <li>
                          <i class="fa-solid fa-check"></i>On-Page Optimization</li>
                        <li>
                          <i class="fa-solid fa-check"></i>Off-Page Optimization</li>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="pack_cards">
                        <h3>Social Media Rs 25000</h3>
                        <li>
                          <i class="fa-solid fa-check"></i>Content Calendar Creation</li>
                        <li>
                          <i class="fa-solid fa-check"></i>Social Media Account Creation</li>
                        <li>
                          <i class="fa-solid fa-check"></i>Social Media Account Optimization</li>
                        <li>
                          <i class="fa-solid fa-check"></i>Social Media Creatives - 8</li>
                        <li>
                          <i class="fa-solid fa-check"></i>Social Media Videos - 2</li>
                        <li>
                          <i class="fa-solid fa-check"></i>Social Media Posting 10</li>
                        <li>
                          <i class="fa-solid fa-check"></i>ORM</li>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="pack_cards">
                        <h3>Leads Generation Rs 5000</h3>
                        <li>
                          <i class="fa-solid fa-check"></i>Ads Execution</li>
                        <li>
                          <i class="fa-solid fa-check"></i>Quality Leads Generation - 10</li>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="pack_cards">
                        <h3>Hosting 8000</h3>
                        <li>
                          <i class="fa-solid fa-check"></i>Domain .com/.in - 1</li>
                        <li>
                          <i class="fa-solid fa-check"></i>Hosting - 1</li>
                        <li>
                          <i class="fa-solid fa-check"></i>Email - 1</li>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row align-items-end d-none">
                <div class="col-xl-3 col-md-6">
                  <div class="zq_h2_price_item mb-30">
                    <div class="zq_h2_price-category">
                      <p>WordPress with WooCommerce</p>
                    </div>
                    <div class="zq_h2_price-amount">
                      <h2>
                        <img src="./assets/img/rupee.svg" alt="">40K</h2>
                    </div>
                    <!-- <p class="zq_h2_price-text">Features Includes</p> -->
                    <div class="zq_h2_price-feature d-none">
                      <ul>
                        <li>
                          <i class="fa-light fa-circle-check"></i>30 pages Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>1 Year Free Domain Name ( .com .in .org )</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>1 Year Free Hosting ( Unlimited Space )</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>20 Product Categories</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>30 Product Listing From Our Side</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Premium Design</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Dynamic Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Admin Access​</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Google Search Console Setup</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Lifetime 24/7 Free Hosting Support</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Unlimited Images & Videos Upload</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Free SSL Certificates</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>10 Free Email Id</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Premium Theme</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>SEO Friendly Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>100% Responsive Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Live Chat Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Payment Gateway Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Social Media Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>WhatsApp Button Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Inquiry Form</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Ecommece Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Product Variation Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Auto Invoice Bill Generater Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Wallet System Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Order Notification Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>OTP Verification Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>1 Year Free Technical Support For Website</li>
                        <!-- <li><i class="fa-light fa-circle-check"></i> Annual Renewal For Hosting
                                                    Rs.4000.</li>
                                                <li></li> -->
                      </ul>
                    </div>
                    <div class="zq_h2_price-btn d-none">
                      <a href="#">Get this Plan Now
                        <svg width="11" height="13" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.57971 10.1668L9.55073 1.8335M9.55073 1.8335H2.37681M9.55073 1.8335V9.33349" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          </path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6">
                  <div class="zq_h2_price_item mb-30">
                    <div class="zq_h2_price-category">
                      <p>Ready Platforms E-commerce</p>
                    </div>
                    <div class="zq_h2_price-amount">
                      <h2>
                        <img src="./assets/img/rupee.svg" alt="">60K</h2>
                    </div>
                    <!-- <p class="zq_h2_price-text">Features Includes</p> -->
                    <div class="zq_h2_price-feature d-none">
                      <ul>
                        <li>
                          <i class="fa-light fa-circle-check"></i>30 pages Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>1 Year Free Domain Name ( .com .in .org )</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>1 Year Free Hosting ( Unlimited Space )</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>20 Product Categories</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>30 Product Listing From Our Side</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Premium Design</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Dynamic Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Admin Access​</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Google Search Console Setup</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Lifetime 24/7 Free Hosting Support</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Unlimited Images & Videos Upload</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Free SSL Certificates</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>10 Free Email Id</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Premium Theme</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>SEO Friendly Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>100% Responsive Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Live Chat Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Payment Gateway Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Social Media Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>WhatsApp Button Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Inquiry Form</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Ecommece Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Product Variation Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Auto Invoice Bill Generater Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Wallet System Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Order Notification Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>OTP Verification Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>1 Year Free Technical Support For Website</li>
                        <!-- <li><i class="fa-light fa-circle-check"></i> Annual Renewal For Hosting
                                                    Rs.4000.</li>
                                                <li></li> -->
                      </ul>
                    </div>
                    <div class="zq_h2_price-btn d-none">
                      <a href="#">Get this Plan Now
                        <svg width="11" height="13" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.57971 10.1668L9.55073 1.8335M9.55073 1.8335H2.37681M9.55073 1.8335V9.33349" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          </path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6">
                  <div class="zq_h2_price_item mb-30">
                    <div class="zq_h2_price-category">
                      <p>Ready PHP with Frameworks</p>
                    </div>
                    <div class="zq_h2_price-amount">
                      <h2>
                        <img src="./assets/img/rupee.svg" alt="">1.90K</h2>
                    </div>
                    <!-- <p class="zq_h2_price-text">Features Includes</p> -->
                    <div class="zq_h2_price-feature d-none">
                      <ul>
                        <li>
                          <i class="fa-light fa-circle-check"></i>50 pages Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>1 Year Free Domain Name ( .com .in .org )</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>1 Year Free Hosting ( Unlimited Space )</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>50 Product Categories</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>30 Product Listing From Our Side</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Premium Design</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Dynamic Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Admin Access​</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Google Search Console Setup</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Lifetime 24/7 Free Hosting Support</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Unlimited Images & Videos Upload</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Free SSL Certificates</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>20 Free Email Id</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Premium Theme</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>SEO Friendly Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>100% Responsive Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Live Chat Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Payment Gateway Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Social Media Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>WhatsApp Button Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Inquiry Form</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Ecommece Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Product Variation Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Auto Invoice Bill Generater Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Wallet System Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Order Notification Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>OTP Verification Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>1 Year Free Technical Support For Website</li>
                        <!-- <li><i class="fa-light fa-circle-check"></i> Annual Renewal For Hosting
                                                    Rs.4000.</li>
                                                <li></li> -->
                      </ul>
                    </div>
                    <div class="zq_h2_price-btn d-none">
                      <a href="#">Get this Plan Now
                        <svg width="11" height="13" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.57971 10.1668L9.55073 1.8335M9.55073 1.8335H2.37681M9.55073 1.8335V9.33349" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          </path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6">
                  <div class="zq_h2_price_item mb-30">
                    <div class="zq_h2_price-category">
                      <p>Customized PHP with Frameworks</p>
                    </div>
                    <div class="zq_h2_price-amount">
                      <h2>
                        <img src="./assets/img/rupee.svg" alt="">???</h2>
                    </div>
                    <!-- <p class="zq_h2_price-text">Features Includes</p> -->
                    <div class="zq_h2_price-feature d-none">
                      <ul>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Pages: According to the requirements</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>1 Year Free Domain Name ( .com .in .org )</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>1 Year Free Hosting ( Unlimited Space )</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>?? Product Categories</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>?? Product Listing From Our Side</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Premium Design</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Dynamic Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Admin Access​</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Google Search Console Setup</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Lifetime 24/7 Free Hosting Support</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Unlimited Images & Videos Upload</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Free SSL Certificates</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>20 Free Email Id</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Premium Theme</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>SEO Friendly Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>100% Responsive Website</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Live Chat Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Payment Gateway Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Social Media Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>WhatsApp Button Integration</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Inquiry Form</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Ecommece Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Product Variation Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Auto Invoice Bill Generater Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Wallet System Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>Order Notification Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>OTP Verification Features</li>
                        <li>
                          <i class="fa-light fa-circle-check"></i>1 Year Free Technical Support For Website</li>
                        <!-- <li><i class="fa-light fa-circle-check"></i> Annual Renewal For Hosting
                                                    Rs.4000.</li> -->
                      </ul>
                    </div>
                    <div class="zq_h2_price-btn d-none">
                      <a href="#">Get this Plan Now
                        <svg width="11" height="13" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.57971 10.1668L9.55073 1.8335M9.55073 1.8335H2.37681M9.55073 1.8335V9.33349" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          </path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- price area end -->
          <!-- choose area start -->
          <section class="zq_h4_choose-area smt d-none">
            <div class="zq_common_width-2">
              <div class="zq_common_width-2_inner">
                <div class="container">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-xxl-5 col-lg-6">
                      <div class="zq_h4_choose-wrap">
                        <div class="zq_section-area">
                          <span class="zq_section-subtitle mb-20">why chose us</span>
                          <h2 class="zq_section-title mb-40">Ecommerce Development Services?</h2>
                        </div>
                        <div class="zq_h4_choose-content">
                          <div class="zq_h4_choose-content-item mb-25">
                            <div class="zq_h4_choose-content-item-icon">
                              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_235_277)">
                                  <path d="M37.037 11.4815C35.5556 11.4815 34.1975 11.4815 32.963 11.4815C30.3704 11.4815 28.5185 9.62963 28.5185 7.03704C28.5185 5.67901 28.5185 4.32099 28.5185 2.96296C28.1482 2.96296 27.9012 2.96296 27.6543 2.96296C22.8395 2.96296 18.1482 2.96296 13.3333 2.96296C11.8519 2.96296 11.358 3.45679 11.358 4.93827C11.358 5.67901 11.358 6.41975 11.358 7.16049C11.358 8.02469 10.7407 8.64198 9.87655 8.64198C9.13581 8.51852 8.64198 7.90123 8.51852 7.03704C8.51852 6.04938 8.51852 5.06173 8.51852 4.07407C8.64198 1.85185 10.4938 0 12.7161 0C18.3951 0 24.0741 0 29.8765 0C30.3704 0 30.8642 0.246914 31.2346 0.617284C33.9506 3.33333 36.6667 6.04938 39.3827 8.76543C39.7531 9.1358 40 9.75309 40 10.1235C40 18.642 40 27.037 40 35.5556C40 38.0247 38.1482 39.8765 35.679 39.8765C30.1235 39.8765 24.4444 39.8765 18.8889 39.8765C17.9012 39.8765 17.1605 39.2593 17.1605 38.3951C17.1605 37.5309 17.7778 36.9136 18.8889 36.9136C24.321 36.9136 29.7531 36.9136 35.1852 36.9136C36.6667 36.9136 37.1605 36.4198 37.1605 34.9383C37.1605 27.2839 37.1605 19.7531 37.1605 12.0988C37.037 12.0988 37.037 11.8519 37.037 11.4815ZM31.4815 5.18518C31.2346 8.2716 31.8519 8.88889 34.8148 8.51852C33.7037 7.40741 32.5926 6.2963 31.4815 5.18518Z" fill="currentColor" />
                                  <path d="M8.51852 36.2963C7.40741 37.4074 6.41975 38.3951 5.4321 39.3827C4.93827 39.8765 4.44444 40.2469 3.7037 39.8765C2.96296 39.6296 2.71605 39.0123 2.71605 38.2716C2.71605 34.5679 2.71605 30.8642 2.71605 27.1605C2.71605 26.7901 2.46914 26.2963 2.22222 26.0494C-0.493827 23.0864 -0.987654 18.8889 1.23457 15.5556C3.33333 12.2222 7.40741 10.7407 11.1111 11.9753C14.8148 13.2099 17.2839 16.7901 17.037 20.7407C16.9136 22.716 16.0494 24.5679 14.6914 26.0494C14.4444 26.4198 14.1975 26.9136 14.1975 27.4074C14.1975 30.9877 14.1975 34.6914 14.1975 38.2716C14.1975 39.0123 14.0741 39.7531 13.2099 40.1235C12.3457 40.4938 11.8519 40 11.358 39.5062C10.4938 38.2716 9.62963 37.284 8.51852 36.2963ZM14.321 20C14.321 16.7901 11.7284 14.321 8.51852 14.321C5.4321 14.321 2.83951 16.9136 2.83951 20.1235C2.83951 23.2099 5.4321 25.8025 8.51852 25.8025C11.7284 25.679 14.321 23.0864 14.321 20ZM5.80247 34.8148C5.92593 34.8148 5.92593 34.9383 6.04938 34.9383C6.2963 34.6914 6.54321 34.321 6.79012 34.0741C6.91358 33.8272 7.16049 33.5802 7.40741 33.3333C8.2716 32.5926 8.88889 32.5926 9.75309 33.3333C10.2469 33.8272 10.7407 34.321 11.358 35.0617C11.358 32.5926 11.358 30.3704 11.358 28.0247C9.50617 28.642 7.65432 28.642 5.80247 28.0247C5.80247 30.3704 5.80247 32.5926 5.80247 34.8148Z" fill="currentColor" />
                                  <path d="M25.679 32.8395C23.3333 32.8395 21.1111 32.8395 18.7654 32.8395C17.6543 32.8395 17.037 32.3457 17.037 31.4815C17.037 30.6173 17.6543 30 18.642 30C23.2099 30 27.9012 30 32.4691 30C33.2099 30 33.9506 30.2469 34.0741 30.9877C34.1975 31.4815 33.9506 32.0988 33.5802 32.4691C33.3333 32.716 32.8395 32.8395 32.3457 32.8395C30.2469 32.8395 27.9012 32.8395 25.679 32.8395Z" fill="currentColor" />
                                  <path d="M27.1605 18.5185C25.3086 18.5185 23.5802 18.5185 21.7284 18.5185C20.6173 18.5185 20 17.9012 20 17.037C20 16.1728 20.6173 15.679 21.7284 15.679C25.3086 15.679 29.0123 15.679 32.5926 15.679C33.5802 15.679 34.321 16.2963 34.321 17.1605C34.321 18.0247 33.7037 18.642 32.5926 18.642C30.7407 18.5185 28.8889 18.5185 27.1605 18.5185Z" fill="currentColor" />
                                  <path d="M27.037 25.679C25.3086 25.679 23.4568 25.679 21.7284 25.679C20.6173 25.679 20 25.1852 20 24.321C20 23.4568 20.6173 22.8395 21.7284 22.8395C25.3086 22.8395 28.8889 22.8395 32.4691 22.8395C33.5802 22.8395 34.1975 23.3333 34.1975 24.321C34.1975 25.1852 33.5802 25.679 32.4691 25.679C30.6173 25.679 28.8889 25.679 27.037 25.679Z" fill="currentColor" />
                                  <path d="M20.7407 11.4815C19.6296 11.4815 18.5185 11.4815 17.4074 11.4815C16.4197 11.4815 15.8025 10.8642 15.8025 10.1235C15.8025 9.25926 16.4197 8.64198 17.4074 8.64198C19.6296 8.64198 21.9753 8.64198 24.1975 8.64198C25.1852 8.64198 25.8025 9.25926 25.8025 10.1235C25.8025 10.9877 25.1852 11.4815 24.321 11.4815C22.963 11.4815 21.8518 11.4815 20.7407 11.4815Z" fill="currentColor" />
                                </g>
                              </svg>
                            </div>
                            <div class="zq_h4_choose-content-item-info">
                              <h4>Trustworthy Security Measures</h4>
                              <p>Our platform prioritizes trust with cutting-edge encryption, safeguarding transactions and customer data.</p>
                            </div>
                          </div>
                          <div class="zq_h4_choose-content-item mb-25">
                            <div class="zq_h4_choose-content-item-icon">
                              <svg width="36" height="43" viewBox="0 0 36 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_235_297)">
                                  <path d="M12.6707 43C12.6707 39.6417 12.6707 36.415 12.6707 33.1884C12.6707 32.464 12.4717 32.0689 11.8747 31.6738C8.09336 29.1057 4.37837 26.4717 0.66339 23.9035C0.132678 23.5084 0 23.1133 0 22.5207C0.066339 20.9403 0 19.294 0 17.6478C0.464373 17.6478 0.796068 17.5819 1.1941 17.5819C1.59214 13.4992 3.78132 10.9969 7.89434 10.075C4.71007 8.75805 3.31695 6.585 3.914 3.951C4.44471 1.64626 6.56756 -0.0658424 9.0221 7.49528e-06C11.4103 0.0658574 13.4668 1.84381 13.8648 4.14855C14.2629 6.8484 12.8698 8.9556 9.81817 10.0092C13.9312 10.9311 16.1867 13.4334 16.5184 17.5161C17.3145 17.5161 18.1105 17.5161 18.9066 17.5161C19.3046 13.4334 21.4938 10.9311 25.6068 10.0092C22.4226 8.6922 21.0958 6.51915 21.6265 3.88515C22.1572 1.51456 24.3464 -0.131692 26.8009 -0.0658424C29.1892 7.49528e-06 31.2457 1.84381 31.5774 4.14855C31.9754 6.8484 30.5159 8.9556 27.5307 9.94335C31.6437 10.8652 33.8992 13.3675 34.2973 17.4502C34.6953 17.4502 35.027 17.5161 35.4914 17.5161C35.4914 18.8331 35.3587 20.1501 35.4914 21.4671C35.624 22.7841 35.1597 23.5084 34.0982 24.2328C30.5159 26.6034 27 29.1715 23.4177 31.608C22.9533 31.9372 22.8206 32.2006 22.8206 32.7933C22.8869 35.0322 22.8206 37.2052 22.8206 39.51C19.5037 40.6953 16.1204 41.8147 12.6707 43ZM15.258 39.4441C16.7838 38.9173 18.1769 38.4564 19.6363 37.9954C20.167 37.8637 20.3661 37.6003 20.2997 37.0735C20.2334 35.2297 20.2997 33.4518 20.2997 31.608C20.2997 31.0153 20.4987 30.6861 20.9631 30.3568C24.5454 27.9204 28.1277 25.3522 31.8427 22.9158C32.9705 22.1914 33.1695 21.3354 32.9041 20.1501C22.8206 20.1501 12.7371 20.1501 2.65356 20.1501C2.3882 21.3354 2.65356 22.1914 3.71498 22.9158C7.36363 25.3522 10.9459 27.9204 14.5946 30.4227C15.0589 30.7519 15.258 31.0812 15.258 31.6738C15.1916 34.242 15.258 36.8101 15.258 39.4441ZM3.84766 17.5819C7.23095 17.5819 10.5479 17.5819 13.9312 17.5819C13.9312 15.7381 13.0688 14.3553 11.543 13.3675C9.81817 12.3139 8.02702 12.3139 6.3022 13.3017C4.71007 14.2894 3.914 15.6723 3.84766 17.5819ZM21.6265 17.5819C25.0098 17.5819 28.3267 17.5819 31.71 17.5819C31.71 15.7381 30.8476 14.2894 29.3218 13.3675C27.597 12.3139 25.7395 12.3139 23.9484 13.3675C22.4226 14.2894 21.6265 15.7381 21.6265 17.5819ZM11.4103 5.0046C11.4103 3.62175 10.2825 2.5023 8.88942 2.5023C7.4963 2.5023 6.36854 3.62175 6.43488 5.07045C6.43488 6.4533 7.56264 7.57275 8.95576 7.57275C10.2825 7.5069 11.4103 6.38745 11.4103 5.0046ZM29.1892 5.07045C29.1892 3.6876 28.0614 2.56815 26.6683 2.56815C25.2752 2.56815 24.1474 3.6876 24.1474 5.07045C24.1474 6.4533 25.2752 7.57275 26.6683 7.57275C27.9951 7.57275 29.1228 6.4533 29.1892 5.07045Z" fill="currentColor" />
                                </g>
                              </svg>
                            </div>
                            <div class="zq_h4_choose-content-item-info">
                              <h4>Scalable Solutions for Every Business</h4>
                              <p>From startups to enterprises, our adaptable solutions ensure seamless growth without compromising performance.</p>
                            </div>
                          </div>
                          <div class="zq_h4_choose-content-item mb-25">
                            <div class="zq_h4_choose-content-item-icon">
                              <svg width="29" height="46" viewBox="0 0 29 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_235_311)">
                                  <path d="M6.423 36.5544C6.80082 34.7598 6.04518 33.7207 4.7228 32.4928C0.188915 28.5257 -1.13347 22.1971 1.13347 16.7187C3.40041 11.3347 8.87885 7.74538 14.7351 8.02875C20.6858 8.21766 25.8809 12.1848 27.6756 17.8522C29.4702 23.5195 27.4867 29.7536 22.6694 33.3429C22.1027 33.8152 21.9138 34.193 21.9138 34.8542C21.9138 36.3655 22.0082 37.9713 21.8193 39.4825C21.2526 43.4497 17.7577 46.1889 13.6961 46C9.82341 45.8111 6.70637 42.5996 6.51746 38.6324C6.423 37.9713 6.423 37.2156 6.423 36.5544ZM19.0801 34.3819C19.0801 34.193 19.1745 34.0986 19.1745 34.0041C18.9856 32.7762 19.6468 32.115 20.5914 31.3593C24.2752 28.7146 25.9754 25.0308 25.5031 20.5914C24.9363 15.5852 20.7803 11.4292 15.963 10.768C10.5791 10.1068 5.5729 12.9405 3.68378 17.7577C1.60575 22.6694 3.2115 28.2423 7.46202 31.1704C8.59549 31.9261 9.35113 32.7762 9.16222 34.193C9.16222 34.193 9.25668 34.2875 9.25668 34.3819C10.3901 34.3819 11.5236 34.3819 12.7515 34.3819C12.7515 32.115 12.7515 29.9425 12.7515 27.6756C12.7515 27.4867 12.3737 27.2033 12.1848 27.1088C10.8624 26.3532 10.0123 25.3142 9.82341 23.7084C9.72896 22.575 10.0123 22.0082 10.8624 21.8193C11.7125 21.6304 12.3737 22.1971 12.4682 23.2361C12.5626 23.9918 12.9405 24.4641 13.6016 24.653C14.6407 25.0308 15.4908 24.3696 15.7741 23.0472C15.963 22.1027 16.5298 21.6304 17.3799 21.7248C18.1355 21.8193 18.6078 22.386 18.5133 23.4251C18.4189 25.1253 17.4743 26.2587 16.0575 27.1088C15.7741 27.2977 15.4908 27.6756 15.4908 27.9589C15.3963 29.2813 15.4908 30.6037 15.4908 31.9261C15.4908 32.6817 15.4908 33.5318 15.4908 34.2875C16.8131 34.3819 17.9466 34.3819 19.0801 34.3819ZM19.0801 37.2156C15.7741 37.2156 12.4682 37.2156 9.16222 37.2156C8.97331 39.4826 9.54004 41.2772 11.5236 42.5051C13.2238 43.5442 15.0185 43.6386 16.7187 42.5996C18.6078 41.3717 19.269 39.577 19.0801 37.2156Z" fill="currentColor" />
                                  <path d="M12.7515 2.55031C12.7515 2.07803 12.7515 1.60575 12.846 1.13347C12.9405 0.472279 13.4127 0 14.0739 0C14.8296 0 15.3018 0.377823 15.3963 1.03901C15.4908 1.98357 15.4908 3.02259 15.3963 3.96714C15.3963 4.72279 14.8296 5.10062 14.1684 5.10062C13.4127 5.10062 12.9405 4.72279 12.846 4.0616C12.7515 3.49487 12.7515 3.02259 12.7515 2.55031Z" fill="currentColor" />
                                  <path d="M10.5791 4.72278C10.2012 5.10061 9.91786 5.66734 9.44559 5.85625C8.87885 6.13962 8.21766 5.85625 7.93429 5.28952C7.46201 4.43942 7.08419 3.49486 6.89528 2.5503C6.80082 2.07802 7.2731 1.41683 7.65092 1.13346C8.1232 0.755639 8.87885 0.850095 9.25667 1.41683C9.72895 2.45584 10.1068 3.49486 10.5791 4.72278Z" fill="currentColor" />
                                  <path d="M21.6304 2.26695C21.1581 3.40042 20.7803 4.5339 20.2136 5.47845C20.0246 5.76182 19.1745 6.04519 18.7967 5.85628C18.4189 5.66737 17.8522 5.00617 17.9466 4.62835C18.1355 3.58934 18.5133 2.55032 19.0801 1.60576C19.269 1.3224 20.1191 1.13348 20.5914 1.22794C20.9692 1.22794 21.2526 1.79468 21.6304 2.26695Z" fill="currentColor" />
                                </g>
                              </svg>
                            </div>
                            <div class="zq_h4_choose-content-item-info">
                              <h4>Seamless Interface Design</h4>
                              <p>Intuitive, visually engaging interfaces simplify the shopping journey, driving exploration and effortless purchases.</p>
                            </div>
                          </div>
                          <!-- <div class="zq_h4_choose-content-bottom pt-20">
                                                        <a href="#" class="zq_theme-btn">More Project</a>
                                                    </div> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                      <div class="zq_h4_choose-right">
                        <div class="inner-item">
                          <div class="swiper h4_choose-active">
                            <div class="swiper-wrapper ">
                              <div class="swiper-slide">
                                <div class="zq_h4_choose-img">
                                  <img src="assets/images/choose/h4_1.png" alt="">
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="zq_h4_choose-img">
                                  <img src="assets/images/choose/h4_2.png" alt="">
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="zq_h4_choose-img">
                                  <img src="assets/images/choose/h4_3.png" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="inner-item">
                          <div class="swiper h4_choose-active-2">
                            <div class="swiper-wrapper ">
                              <div class="swiper-slide">
                                <div class="zq_h4_choose-img">
                                  <img src="assets/images/choose/h4_4.png" alt="">
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="zq_h4_choose-img">
                                  <img src="assets/images/choose/h4_5.png" alt="">
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="zq_h4_choose-img">
                                  <img src="assets/images/choose/h4_6.png" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- choose area end -->
          <!-- testimonial area start -->
          <section id="feedback" class="zq_h2_testimonial-area zq_h2_testimonial-bg pt-95 pb-100 ">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-xl-5">
                  <div class="zq_section-area text-center">
                    <span class="zq_section-subtitle mb-20">Feedback</span>
                    <h2 class="zq_section-title mb-40">Our Happy Clients</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="pl-30 pr-30">
              <div class="swiper h2_testimonial-active">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="zq_h2_testimonial-item">
                      <ul class="zq_h2_testimonial-item-rating">
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                      </ul>
                      <p>"I'm really happy with the design of Monarch Ergo's e-commerce site! It's user-friendly , looks great, and has helpful customer support. Highly recommend! ”</p>
                      <div class="zq_h2_testimonial-admin">
                        <!-- <img src="assets/images/testimonial/h2_1.png" alt=""> -->
                        <div class="zq_h2_testimonial-admin-info">
                          <h5>- Monarch Ergo</h5>
                          <!-- <span>Marketing, Layers</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="zq_h2_testimonial-item">
                      <ul class="zq_h2_testimonial-item-rating">
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                      </ul>
                      <p>"As the owner of Hairstyles, I'm thrilled with our website design—beautiful, user-friendly, and perfect for showcasing our brand!”</p>
                      <div class="zq_h2_testimonial-admin">
                        <!-- <img src="assets/images/testimonial/h2_2.png" alt=""> -->
                        <div class="zq_h2_testimonial-admin-info">
                          <h5>- Hair Styles</h5>
                          <!-- <span>Marketing, Layers</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="zq_h2_testimonial-item">
                      <ul class="zq_h2_testimonial-item-rating">
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                        <li>
                          <i class="fa-sharp fa-solid fa-star"></i>
                        </li>
                      </ul>
                      <p>"As the owner of Fresh Meat In Mart, I'm delighted with our website design! It’s visually striking, easy to navigate, and showcases our products beautifully! ”</p>
                      <div class="zq_h2_testimonial-admin">
                        <!-- <img src="assets/images/testimonial/h2_3.png" alt=""> -->
                        <div class="zq_h2_testimonial-admin-info">
                          <h5>- Fresh Meat In Mart</h5>
                          <!-- <span>Marketing, Layers</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="swiper-slide">
                                        <div class="zq_h2_testimonial-item">
                                            <ul class="zq_h2_testimonial-item-rating">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            </ul>
                                            <p>"Daily is the tool every SaaS founder has been for. It allows SaaS
                                                companies to grow without dilution by financing their SaaS receivables.”
                                            </p>
                                            <div class="zq_h2_testimonial-admin">
                                                <img src="assets/images/testimonial/h2_4.png" alt="">
                                                <div class="zq_h2_testimonial-admin-info">
                                                    <h5>Orlando Diggs</h5>
                                                    <span>Marketing, Layers</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                </div>
                <div class="zq_navigation justify-content-center mt-50">
                  <div class="h2_testimonial-prev">
                    <i class="fa-solid fa-angle-left"></i>
                  </div>
                  <div class="h2_testimonial-next">
                    <i class="fa-solid fa-angle-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- testimonial area end -->
          <!-- testimonial area start -->
          <!-- <section id="feedback" class="zq_h3_testimonial-area bg-padding smt">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="h3_testimonial-wrap">
                                        <div class="h3_testimonial-thumbs swiper mb-30">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="h3_testimonial-img">
                                                        <img src="assets/images/testimonial/h3_1.png" alt="">
                                                        <img src="assets/images/testimonial/h3_shape.png" alt=""
                                                            class="h3_testimonial-img-shape">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="h3_testimonial-img">
                                                        <img src="assets/images/testimonial/h3_2.png" alt="">
                                                        <img src="assets/images/testimonial/h3_shape.png" alt=""
                                                            class="h3_testimonial-img-shape">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="h3_testimonial-img">
                                                        <img src="assets/images/testimonial/h3_3.png" alt="">
                                                        <img src="assets/images/testimonial/h3_shape.png" alt=""
                                                            class="h3_testimonial-img-shape">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h3_testimonial-active swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="zq_h3_testimonial-item">
                                                        <p>"I had a great experience with Techsters for my website
                                                            design. The team was professional, responsive, and attentive
                                                            to my needs. They created a website that exceeded my
                                                            expectations and delivered it on time. I highly recommend
                                                            Tech Sters for anyone looking for a reliable and skilled web
                                                            designing company."</p>
                                                        <div class="zq_h3_testimonial-item-admin">
                                                            <h4>Ram Rathan</h4>
                                                            <span>Web Designer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="zq_h3_testimonial-item">
                                                        <p>"I am thoroughly impressed with Techsters' app development
                                                            services. The team is highly skilled and knowledgeable, and
                                                            they deliver exceptional results. I highly recommend Tech
                                                            Sters for anyone looking for reliable and professional app
                                                            development services."</p>
                                                        <div class="zq_h3_testimonial-item-admin">
                                                            <h4>Praveen</h4>
                                                            <span>Web Designer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="zq_h3_testimonial-item">
                                                        <p>Techsters is a reliable and efficient company that
                                                            specializes in logo and poster design. Their creative
                                                            designs and attention to detail are top-notch, making them a
                                                            great choice for any business looking to enhance their
                                                            branding. Overall, Techsters provides excellent service and
                                                            delivers impressive results.</p>
                                                        <div class="zq_h3_testimonial-item-admin">
                                                            <h4>Dev Abhilash</h4>
                                                            <span>Web Designer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h3_testimonial-prev h3_testimonial-nav"><i
                                                class="fa-solid fa-angle-left"></i></div>
                                        <div class="h3_testimonial-next h3_testimonial-nav"><i
                                                class="fa-solid fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
          <!-- testimonial area end -->
          <!-- faq area start -->
          <section id="faq" class="zq_inner_faq-area pt-100 pb-100 zq_dark_bg smt faq">
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-lg-12">
                  <div class="zq_inner_faq-left mb-40 mb-lg-0">
                    <div class="zq_section-area">
                      <span class="zq_section-subtitle mb-20">FAQ</span>
                      <h2 class="zq_section-title mb-20">Frequently Asked Questions</h2>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="zq_inner_faq-content">
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item mb-20">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span>
                              <i class="fa-sharp fa-solid fa-plus"></i>
                            </span>Will we get access to the admin panel?</button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Yes, access to the admin panel will be provided to authorized personnel.</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item mb-20">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span>
                              <i class="fa-sharp fa-solid fa-plus"></i>
                            </span>What are the e-commerce packages?</button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>You can find the list of e-commerce packages in the section above.</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item mb-20">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span>
                              <i class="fa-sharp fa-solid fa-plus"></i>
                            </span>Will you design the website to align with my brand identity?</button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Yes, we will design the website to align with your brand identity, but full customization is possible only based on the selected package.</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item mb-20">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <span>
                              <i class="fa-sharp fa-solid fa-plus"></i>
                            </span>How many days can we expect the designed site to be delivered?</button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>The e-commerce site will be delivered in approximately 3-4 weeks.</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item mb-20">
                        <h2 class="accordion-header" id="headingFive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <span>
                              <i class="fa-sharp fa-solid fa-plus"></i>
                            </span>Can you design a responsive site that works on all devices?</button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Yes, we will design a responsive site that is accessible on all devices, including mobile phones and laptops.</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item mb-20">
                        <h2 class="accordion-header" id="headingSix">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <span>
                              <i class="fa-sharp fa-solid fa-plus"></i>
                            </span>Will you assist us with the payment gateway?</button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Yes, we will provide payment gateway options, including Razor pay.</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <span>
                              <i class="fa-sharp fa-solid fa-plus"></i>
                            </span>How can you help my site rank at the top of Google search results?</button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>To improve your site's ranking on Google, we recommend utilizing our Digital Marketing (DM) services.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- faq area end -->
          <!-- contact area start -->
          <section id="contactUs" class="zq_contact-area  smt zq_h4_hero-area">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="zq_contact-content">
                    <div class="zq_section-area">
                      <span class="zq_section-subtitle mb-20">Contact Us</span>
                      <h2 class="zq_section-title mb-30">Get Stared with Us.
                        Call Us Now!</h2>
                      <p class="zq_section-text mb-40">The fastest way to convert visitors into leads and sales on your website is with Social Daily Marketing. That's why businesses use Daily.</p>
                    </div>
                    <div class="zq_contact-call">
                      <div class="zq_contact-call-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M44.2391 16.9892C41.5369 6.94588 33.3318 0 24 0C14.6965 0 6.46024 6.95718 3.76094 16.9892C1.65176 17.2207 0 18.9995 0 21.1765V32.4706C0 34.2353 1.07859 35.7459 2.60894 36.3812C3.15671 41.3139 7.30447 45.1765 12.3812 45.1765H20.0245C20.6089 46.8169 22.1619 48 24 48H32.4706C34.8056 48 36.7059 46.0998 36.7059 43.7647C36.7059 41.4296 34.8056 39.5294 32.4706 39.5294H24C22.1619 39.5294 20.6089 40.7125 20.0245 42.3529H12.3812C8.97035 42.3529 6.12141 39.9247 5.46635 36.7059H8.47059V33.8824H11.2941V19.7647H8.47059V16.9412H6.75953C9.33741 8.58071 16.224 2.82353 24 2.82353C31.7986 2.82353 38.6626 8.57506 41.2405 16.9412H39.5294V19.7647H36.7059V33.8824H39.5294V36.7059H43.7816C46.1082 36.7059 48 34.8056 48 32.4706V21.1765C48 18.9995 46.3482 17.2207 44.2391 16.9892ZM24 42.3529H32.4706C33.2471 42.3529 33.8824 42.9854 33.8824 43.7647C33.8824 44.544 33.2471 45.1765 32.4706 45.1765H24C23.2235 45.1765 22.5882 44.544 22.5882 43.7647C22.5882 42.9854 23.2235 42.3529 24 42.3529ZM5.64706 33.8824H4.21835C3.45035 33.8824 2.82353 33.2499 2.82353 32.4706V21.1765C2.82353 20.3972 3.45035 19.7647 4.21835 19.7647H5.64706V33.8824ZM45.1765 32.4706C45.1765 33.2499 44.5496 33.8824 43.7816 33.8824H42.3529V19.7647H43.7816C44.5496 19.7647 45.1765 20.3972 45.1765 21.1765V32.4706Z" fill="currentColor" />
                        </svg>
                      </div>
                      <div class="zq_contact-call-info">
                        <span>Contact Us</span>
                        <a href="tel:+91 888 552 6751">+91 888 552 6751</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 d-none">
                  <img src="assets/images/hero/h4_shape-1.png" alt="" class="zq_h4_hero-shape-1">
            
                </div>
              </div>
              <!-- <div class="zq_contact-wrap">
                                <div class="zq_contact-form">
                                    <form action="#">
                                        <div class="row g-20">
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" placeholder="Email">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Phone">
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="select" class="has-nice-select">
                                                    <option value="1">Select Service</option>
                                                    <option value="2">Art & Design</option>
                                                    <option value="3">Graphic Design</option>
                                                    <option value="4">Web Design</option>
                                                    <option value="5">UX/UI Design</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <textarea name="message" placeholder="Write a Message"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="zq_contact-form-btn">Send Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="zq_contact-content">
                                    <div class="zq_section-area">
                                        <h2 class="zq_section-title mb-30">Get Stared with Us. <br>
                                            Call Us Now!</h2>
                                        <p class="zq_section-text mb-40">The fastest way to convert visitors into leads
                                            and sales on your website is with Social Daily Marketing. That's why
                                            businesses use Daily.</p>
                                    </div>
                                    <div class="zq_contact-call">
                                        <div class="zq_contact-call-icon">
                                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M44.2391 16.9892C41.5369 6.94588 33.3318 0 24 0C14.6965 0 6.46024 6.95718 3.76094 16.9892C1.65176 17.2207 0 18.9995 0 21.1765V32.4706C0 34.2353 1.07859 35.7459 2.60894 36.3812C3.15671 41.3139 7.30447 45.1765 12.3812 45.1765H20.0245C20.6089 46.8169 22.1619 48 24 48H32.4706C34.8056 48 36.7059 46.0998 36.7059 43.7647C36.7059 41.4296 34.8056 39.5294 32.4706 39.5294H24C22.1619 39.5294 20.6089 40.7125 20.0245 42.3529H12.3812C8.97035 42.3529 6.12141 39.9247 5.46635 36.7059H8.47059V33.8824H11.2941V19.7647H8.47059V16.9412H6.75953C9.33741 8.58071 16.224 2.82353 24 2.82353C31.7986 2.82353 38.6626 8.57506 41.2405 16.9412H39.5294V19.7647H36.7059V33.8824H39.5294V36.7059H43.7816C46.1082 36.7059 48 34.8056 48 32.4706V21.1765C48 18.9995 46.3482 17.2207 44.2391 16.9892ZM24 42.3529H32.4706C33.2471 42.3529 33.8824 42.9854 33.8824 43.7647C33.8824 44.544 33.2471 45.1765 32.4706 45.1765H24C23.2235 45.1765 22.5882 44.544 22.5882 43.7647C22.5882 42.9854 23.2235 42.3529 24 42.3529ZM5.64706 33.8824H4.21835C3.45035 33.8824 2.82353 33.2499 2.82353 32.4706V21.1765C2.82353 20.3972 3.45035 19.7647 4.21835 19.7647H5.64706V33.8824ZM45.1765 32.4706C45.1765 33.2499 44.5496 33.8824 43.7816 33.8824H42.3529V19.7647H43.7816C44.5496 19.7647 45.1765 20.3972 45.1765 21.1765V32.4706Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                        <div class="zq_contact-call-info">
                                            <span>Contact Us</span>
                                            <a href="tel:+91 888 552 6751"> +91 888 552 6751</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
            </div>
          </section>
          <!-- contact area end -->
        </main>
      </div>
    </div>
  </div>
  <!-- jQuery Js -->
  <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/gsap.min.js"></script>
  <script src="assets/js/ScrollSmoother.min.js"></script>
  <!-- <script src="assets/js/ScrollTrigger.min.js"></script> -->
  <script src="assets/js/TweenMax.min.js"></script>
  <script src="assets/js/SplitText.min.js"></script>
  <script src="assets/js/chroma.min.js"></script>
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/wow.html"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
  window.onscroll = function() {
              myFunction()
          };
  
          var header = document.getElementById("myHeader");
          var sticky = header.offsetTop;
  
          function myFunction() {
              if (window.pageYOffset > sticky) {
                  header.classList.add("sticky");
              } else {
                  header.classList.remove("sticky");
              }
          }
  </script>
  <!--<script>-->
  <!--function onRecaptchaSuccess(token) {-->
  <!--    document.getElementById('recaptchaToken').value = token;-->
  <!--}-->
  <!--document.getElementById('contactForm').addEventListener('submit', function(event) {-->
  <!--    var recaptchaToken = document.getElementById('recaptchaToken').value;-->
  <!--    if (!recaptchaToken) {-->
  <!--        event.preventDefault();-->
  <!--        alert('Please complete the reCAPTCHA');-->
  <!--    }-->
  <!--});-->
  <!--</script>-->
</body>

</html>