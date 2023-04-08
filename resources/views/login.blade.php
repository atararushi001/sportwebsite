      
@extends('layout.main')

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
                  <button type="submit"><i class="far fa-search"></i></button>
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
                        <a target="_blank"
                           href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                           Mirnada City Tower, NYC</a>
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
                     <h3 class="breadcrumb-title breadcrumb-title-sd mb-15"> login </h3>
                     <div class="page_title__bread-crumb">
                        <nav>
                           <nav class="breadcrumb-trail breadcrumbs">
                              <ul class="breadcrumb-menu" style="display:block;">
                                 <li class="breadcrumb-trail">
                                    <a href="index.html"><span>Home</span></a>
                                 </li>
                                 <li class="trail-item">
                                    <span>login </span>
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

      <!-- coupon-area-start -->
      <div class="coupon-area pt-120 pb-70">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-6">
                  <div class="coupon-accordion">
                     <!-- ACCORDION START -->

                     <div class="coupon-info">
                        <h1 class="coupon-text">Login detail</h1>
                        <form  method="post" action="{{route('createlogin')}}">
                           @csrf
                           @error('email')
                           <p class="alret alert-danger error">{{ $message }}</p> 
                            @enderror 
                           <p class="form-row-first">
                              <label>email<span class="required">*</span></label>
                              <input type="text" placeholder="email " name="email">
                            
                           </p>
                           <p class="form-row-last">
                              <label>Password <span class="required">*</span></label>
                              <input type="password" name="password"placeholder="password" >
                           </p>
                          
                           <p class="form-row">
                              <button class="tp-btn-square-lg" name="login" type="submit">Login</button>
                             
                           </p>
                           <!-- <p class="lost-password">
                                    <a href="#">Enter creact password or email</a>
                                    </p> -->
                        </form>
                     </div>

                     <!-- ACCORDION END -->
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!-- coupon-area-end -->

      <!-- checkout-area-start -->

      <!-- checkout-area-end -->

   </main>


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
   @endsection