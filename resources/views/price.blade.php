
@extends('layout.main')

@section('content')

      <!-- preloader start -->
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


      <!-- sidebar area start -->
   
      <!-- body-overlay" -->

      <main>

         <!-- page__title-start -->
         <div class="page__title align-items-center" data-background="assets/img/bg/breadcam-bg.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="page__title-content text-center">
                        <h3 class="breadcrumb-title breadcrumb-title-sd mb-15">Pricing plan</h3>
                        <div class="page_title__bread-crumb">
                        <nav>
                           <nav class="breadcrumb-trail breadcrumbs">
                              <ul class="breadcrumb-menu" style="display:block;">
                                 <li class="breadcrumb-trail">
                                    <a href="index.html"><span>Home</span></a>
                                 </li>
                                 <li class="trail-item">
                                    <span>Pricing plan</span>
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

         <!-- priceing-area-start -->
         <div class="priceing-area pt-120 pb-90">
            <div class="container custome-container">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="section-wrap-two text-center">
                        <span class="tpsub-title-two mb-15"><i class="far fa-circle"></i>Pricing plan<i class="far fa-circle"></i></span>
                        <h3 class="section-title-two  mb-30">Comportable Pricing package and choose your best plan</h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp_priceing">
               <div class="container custome-container mt-35">
                  <div class="row justify-content-center">
                     <div class="row " style="text-align: center; display: contents;">
                        <div class="col-lg-4 col-md-6">
                           <div class="price_item mb-30 wow fadeInUp" data-wow-delay=".6s">
                              <div class="priceing_image mb-10">
                                 <img src="assets/img/priceing/price1.jpg" alt="" class="img-fluid">
                              </div>
                              <div class="price_info pt-80" data-background="assets/img/priceing/price-bg.png">
                                 <div class="price text-center">
                                    <div class="inner">
                                       <h5>200</h5>
                                       <p>Monthly</p>
                                    </div>
                                    <img src="" alt="" srcset="">
                                 </div>
                                 <h5 class="price_type mb-20 text-center">Standard</h5>
                                 <div class="tp_pricing-list pb-45">
                                    <ul>
                                       <li><i class="fal fa-check"></i> Personal Trainer</li>
                                       <li><i class="fal fa-check"></i> Special Meditation</li>
                                       <li><i class="fal fa-check"></i> Using all Tools</li>
                                       <li><i class="fal fa-check"></i> 24 Hour Services</li>
                                    </ul>
                                 </div>
                                 <div class="price-btn text-center pb-30">
                                    <a href="register.php" class="tp-btn-round">join today <i class="fal fa-chevron-double-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="price_item mb-30 wow fadeInUp" data-wow-delay=".9s">
                              <div class="priceing_image priceing_image-active mb-10 ">
                                 <img src="assets/img/priceing/price2.jpg" alt="" class="img-fluid">

                                 <div class="price__popular">
                                    <span>popular</span>
                                 </div>

                              </div>
                              <div class="price_info pt-80" data-background="assets/img/priceing/price-bg2.png">
                                 <div class="price price-active text-center">
                                    <div class="inner">
                                       <h5>600</h5>
                                       <p>6 Month</p>
                                    </div>
                                 </div>
                                 <h5 class="price_type price_type-active mb-20 text-center">Premium</h5>
                                 <div class="tp_pricing-list tp_pricing-list-active pb-45">
                                    <ul>
                                       <li><i class="fal fa-check"></i> Personal Trainer</li>
                                       <li><i class="fal fa-check"></i> Special Meditation</li>
                                       <li><i class="fal fa-check"></i> Using all Tools</li>
                                       <li><i class="fal fa-check"></i> 24 Hour Services</li>
                                    </ul>
                                 </div>
                                 <div class="price-btn text-center pb-30">
                                    <a href="price.html" class="tp-btn-round servic_btn-active">join today <i class="fal fa-chevron-double-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="col-lg-4 col-md-6">
                           <div class="price_item mb-30 wow fadeInUp" data-wow-delay="1.2s">
                              <div class="priceing_image mb-10">
                                 <img src="assets/img/priceing/price3.jpg" alt="" class="img-fluid">
                              </div>
                              <div class="price_info pt-80" data-background="assets/img/priceing/price-bg.png">
                                 <div class="price text-center">
                                    <div class="inner">
                                       <h5>$45</h5>
                                       <p>Monthly</p>
                                    </div>
                                 </div>
                                 <h5 class="price_type mb-20 text-center">Platinum</h5>
                                 <div class="tp_pricing-list pb-45">
                                    <ul>
                                       <li><i class="fal fa-check"></i> Personal Trainer</li>
                                       <li><i class="fal fa-check"></i> Special Meditation</li>
                                       <li><i class="fal fa-check"></i> Using all Tools</li>
                                       <li><i class="fal fa-check"></i> 24 Hour Services</li>
                                    </ul>
                                 </div>
                                 <div class="price-btn text-center pb-30">
                                    <a href="price.html" class="tp-btn-round">join today <i class="fal fa-chevron-double-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="pricing-shape fix">
               <img src="assets/img/priceing/price-shape1.png" alt="">
            </div>
            <div class="pricing-shape-two fix">
               <img src="assets/img/priceing/price-shape2.png" alt="">
            </div>
         </div>
         <!-- priceing-area-end -->

         <!-- testimonial-area-start -->
         <div class="testimonial-area-two" data-background="assets/img/testimonial/testimonial-bg2.jpg">
            <div class="container">
               <div class="pt-120 pb-115">
                  <div class="row justify-content-center">
                     <div class="col-xxl-10 col-xl-11 col-lg-12">
                        <div class="swiper-container testimonial_active">
                           <div class="testimonial-wrapper swiper-wrapper">
                              <div class="testimonial-slider-item swiper-slide text-center">
                                 <div class="tesimonial-quote mb-60">
                                    <img src="assets/img/testimonial/testimoinal-quote.png" alt="">
                                 </div>
                                 <div class="testimonial-info">
                                    <p class="testimonial_description testimonial_description-two pb-50">Eleifend dis luctus be hace sociis porta sociosqu praesent lobortis tortor augue enim muse saoreet aenean litorace uterns dictum dolor convallis urnan erose nulla semper elementum primis tempor enim hac ante id sagittis suscipit nunc per luctus lacus utern aliquet nase vele anic scelerisque dus dapibus feugiat scelerisque metre</p>
                                    <h5 class="client-name client-name2">Calwen Synton</h5>
                                    <span class="client-degination client-degination2">Sr Designer</span>
                                 </div>
                              </div>
                              <div class="testimonial-slider-item swiper-slide text-center">
                                 <div class="tesimonial-quote mb-60">
                                    <img src="assets/img/testimonial/testimoinal-quote.png" alt="">
                                 </div>
                                 <div class="testimonial-info">
                                    <p class="testimonial_description testimonial_description-two pb-50">Sagittis suscipit nunc per luctus lacus utern aliquet nase vele anic scelerisque dus dapibus feugiat scelerisque metre. eleifend dis luctus be hace sociis porta sociosqu praesent lobortis tortor augue enim muse saoreet aenean litorace uterns dictum dolor convallis urnan erose nulla semper elementum primis tempor enim hac ante id.</p>
                                    <h5 class="client-name client-name2">Calwen Andrew</h5>
                                    <span class="client-degination client-degination2">Sr Dev</span>
                                 </div>
                              </div>
                              <div class="testimonial-slider-item swiper-slide text-center">
                                 <div class="tesimonial-quote mb-60">
                                    <img src="assets/img/testimonial/testimoinal-quote.png" alt="">
                                 </div>
                                 <div class="testimonial-info">
                                    <p class="testimonial_description testimonial_description-two pb-50">Saoreet aenean litorace uterns dictum dolor convallis urnan erose nulla semper elementum primis tempor enim hac. Eleifend dis luctus be hace sociis porta sociosqu praesent lobortis tortor augue enim muse ante id sagittis suscipit nunc per luctus lacus utern aliquet nase vele anic scelerisque dus dapibus feugiat scelerisque metre</p>
                                    <h5 class="client-name client-name2">Calwen Synton</h5>
                                    <span class="client-degination client-degination2">Sr Designer</span>
                                 </div>
                              </div>
                           </div>
                           <!-- If we need navigation buttons -->
                           <div class="swiper-button-prev ts-button ts-button2 ts-button-prev"></div>
                           <div class="swiper-button-next ts-button ts-button2 ts-button-next"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- testimonial-area-end -->

         <!-- sponsor-area-start -->
         <div class="sponsor-area">
            <div class="container custome-container">
               <div class="swiper-container sponsor_slider-active">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide sponsor_item">
                        <a href="#"><img src="assets/img/sponsor/sponsor-4.png" alt=""></a>
                     </div>
                     <div class="swiper-slide sponsor_item">
                        <a href="#"><img src="assets/img/sponsor/sponsor-1.png" alt=""></a>
                     </div>
                     <div class="swiper-slide sponsor_item">
                        <a href="#"><img src="assets/img/sponsor/sponsor-2.png" alt=""></a>
                     </div>
                     <div class="swiper-slide sponsor_item">
                        <a href="#"><img src="assets/img/sponsor/sponsor-3.png" alt=""></a>
                     </div>
                     <div class="swiper-slide sponsor_item">
                        <a href="#"><img src="assets/img/sponsor/sponsor-4.png" alt=""></a>
                     </div>
                     <div class="swiper-slide sponsor_item">
                        <a href="#"><img src="assets/img/sponsor/sponsor-3.png" alt=""></a>
                     </div>
                     <div class="swiper-slide sponsor_item">
                        <a href="#"><img src="assets/img/sponsor/sponsor-1.png" alt=""></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- sponsor-area-end -->
         
      </main>

      

      <!-- modal-search-start -->
      <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
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
