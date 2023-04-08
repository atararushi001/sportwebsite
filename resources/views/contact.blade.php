
@extends('layout/main')

@section('content')
@section('content')

      <div id="preloader">
         <div class="preloader">
            <span></span>
            <span></span>
         </div>
      </div>
      <!-- preloader end -->

      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->

      <!-- top-nav-start -->
      <!-- top-nav-end -->

      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
                  <i class="fal fa-times"></i>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="sidebar__logo mb-40">
                  <a href="index.html">
                  <img src="assets/img/logo/logo.png" alt="logo">
                  </a>
               </div>
               <div class="sidebar__search mb-25">
                  <form action="#">
                     <input type="text" placeholder="What are you searching for?">
                     <button type="submit" ><i class="far fa-search"></i></button>
                  </form>
               </div>
               <div class="mobile-menu fix"></div>
               <div class="sidebar__contact mt-30 mb-20">
                  <h4>Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A, Mirnada City Tower, NYC</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="tel:+012-345-6789">088889797697</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="mailto:support@gmail.com">support@mail.com</a>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="sidebar__social">
                  <ul>
                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                     <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end --> 

      <div class="body-overlay"></div>
      <!-- body-overlay -->

      <main>

         <!-- page__title-start -->
         <div class="page__title align-items-center" data-background="assets/img/bg/breadcam-bg.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="page__title-content text-center">
                        <h3 class="breadcrumb-title breadcrumb-title-sd mb-15">contact us</h3>
                        <div class="page_title__bread-crumb">
                        <nav>
                           <nav class="breadcrumb-trail breadcrumbs">
                              <ul class="breadcrumb-menu" style="display:block;">
                                 <li class="breadcrumb-trail">
                                    <a href="index.html"><span>Home</span></a>
                                 </li>
                                 <li class="trail-item">
                                    <span>Contact</span>
                                 </li>
                              </ul>
                           </nav> 
                        </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- page__title-end -->

         <!-- tp-map-area-start -->
         <div class="tp-map-area pb-110">
            <div class="tp-contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.9954510549856!2d70.89859361498735!3d22.2402513853548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b4a389fea2c5%3A0xd34cbbd1fde49f79!2sRK%20University%20Rd%2C%20Rajkot%2C%20Gujarat%20360020!5e0!3m2!1sen!2sin!4v1676004520259!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
            </div>
         </div>
         <!-- tp-map-area-end -->

         <!-- conatct_dinfo-start -->
         <div class="conatct_dinfo">
            <div class="container custome-container">
               <div class="row">
                  <div class="col-md-4 col-sm-6">
                     <div class="tp-contact-info mb-40">
                        <div class="sv-inner">
                           <div class="services-icon">
                              <i class="fas fa-map-marker-alt"></i>
                           </div>
                        </div>
                        <div class="tp-contact-info-text">
                           <h4 class="tp-contact-info-title">Address</h4>
                           <p><a href="https://goo.gl/maps/5x6EBHqoxu7xShyZ8" target="_blank">752 Settler, California</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                     <div class="tp-contact-info mb-40">
                        <div class="sv-inner">
                           <div class="services-icon">
                              <i class="fas fa-phone"></i>
                           </div>
                        </div>
                        <div class="tp-contact-info-text">
                           <h4 class="tp-contact-info-title">Phone</h4>
                           <p><a href="tel:333888200">02 (365) 365 3625</a>
                        </div>
                  </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                     <div class="tp-contact-info mb-40">
                        <div class="sv-inner">
                           <div class="services-icon">
                              <i class="fas fa-envelope-open"></i>
                           </div>
                        </div>
                        <div class="tp-contact-info-text">
                           <h4 class="tp-contact-info-title">Email</h4>
                           <p><a href="mailto:info@feoxe4.com">info@feoxe4.com</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="contact-shape">
               <img src="assets/img/bg/contact-shape.png" alt="">
            </div>
         </div>
         <!-- conatct_dinfo-end -->

         <!-- support_area-start -->
         <div class="support_area pt-35  pb-90">
            <div class="container custome-container">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="suppoter-image suppoter-image-two mb-30">
                        <img src="assets/img/classes/cs-supporot-2.jpg" alt="">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="support_info-two mb-35">
                        <div class="section-wrap mb-35">
                           <span class="tpsub-title mb-15">Customer support</span>
                           <h3 class="section-title mb-20">Dedicated supporting team ready for help you</h3>
                           <span class="section-border mb-30"><i class="far fa-circle"></i></span>
                        </div>
                        <form action="include/function.php" method="post">
                           <div class="tp-support-form-field mb-20">
                              <input type="text" placeholder="Full name" name="fanme">
                           </div>
                           <div class="tp-support-form-field mb-20">
                              <input type="email" placeholder="Email Address" name="email">
                           </div>
                           <div class="tp-support-form-field mb-20">
                              <textarea placeholder="Your Message" name="message"></textarea>
                           </div>
   
                           <div class="support-btn">
                              <button type="submit" class="tp-btn-round" name="contact">Get Estimate<i class="fal fa-chevron-double-right"></i></button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="contact-shape-2">
               <img src="assets/img/bg/contact-shape2.png" alt="">
            </div>
         </div>
         <!-- support_area-end -->
      </main>

      <!-- footer-area-start -->
      <!-- footer-area-end -->

      <!-- modal-search-start -->
      <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
         </button>
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <form>
                     <input type="text" placeholder="Search here...">
                     <button>
                        <i class="fa fa-search"></i>
                     </button>
               </form>
            </div>
         </div>
      </div>
      <!-- modal-search-end -->

      
      <!-- JS here -->
    

@endsection