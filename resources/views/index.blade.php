
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
                  <img src="{{ URL::asset('img/logo.png') }}" alt="logo">
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
      <!-- sidebar area end -->

      <main>
         <!-- hero-area-start  -->
         <div class="hero-area fix">
            <div class="hero-slider slider__active swiper-container swiper-container-fade">
               <div class="swiper-wrapper p-relative">
                  <div class="hero-pagination"></div>
                  <div class="item-slider swiper-slide">
                     <div class="slide-bg" data-background="{{ URL::asset('img/bg/hero-1.jpg')}}"></div>
                     <div class="container">
                        <div class="row ">
                           <div class="col-lg-12">
                              <div class="slider-all-text">
                                 <span data-animation="fadeInUp" data-delay=".2s">Rku Fitness Zone</span>
                                 <h2 class="hero-title" data-animation="fadeInUp" data-delay=".4s">be storong</h2>
                                 <p class="description mt-10 mb-50" data-animation="fadeInUp" data-delay=".6s">Hardest part is walking out in the front door</p>
                                
                                 <div class="play-option">
                                    <a href="{{ route('price') }}" class="tp-btn">gym pricing details <i class="fal fa-chevron-double-right"></i></a>
                                
                         
                                 </div>
                                   @if(isset(Auth::user()->email))
                                 <div class="play-option" data-animation="fadeInUp" data-delay=".8s">
                                    <a href="{{ route('sport') }}" class="tp-btn">Sport equqment <i class="fal fa-chevron-double-right"></i></a>
                                    @endif
                                 </div>
                              </div>
                     
                           </div>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- hero-area-end -->

         <!-- tpfeatures-lists-start -->
         <div class="tpfeatures-lists">
            <div class="container">
               <div class="row g-0">
                  <div class="col-lg-3 col-md-3">
                     <div class="tp-features-item tp-features-item-border text-center mb-30 wow fadeInUp"  data-wow-delay=".2s">
                        <div class="tpfeatures-icon mb-25">
                           <i class="flaticon-muscle"></i>
                        </div>
                        <span>gym Services</span>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                     <div class="tp-features-item tp-features-item-border item-active text-center mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="tpfeatures-icon mb-25">
                           <i class="flaticon-customer"></i>
                        </div>
                        <span>Qualified Instructor</span>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                     <div class="tp-features-item tp-features-item-border text-center mb-30 wow fadeInUp" data-wow-delay=".8s">
                        <div class="tpfeatures-icon mb-25">
                           <i class="flaticon-apple"></i>
                        </div>
                        <span>sports</span>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                     <div class="tp-features-item text-center mb-30 wow fadeInUp" data-wow-delay=".10s">
                        <div class="tpfeatures-icon mb-25">
                           <i class="flaticon-lawn-mower"></i>
                        </div>
                        <span>sport Programs</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- tpfeatures-lists-end -->

         <!-- tp-about-area-start -->
         <div class="services-list mt-100" data-background="{{ URL::asset('img/services/services-bg.jpg')}}">
            <div class="container custome-container">
               <div class="section-wrap-two text-center wow fadeInUp" data-wow-delay=".2s">
                  <span class="tpsub-title-two mb-15"><i class="far fa-circle"></i>Our services<i class="far fa-circle"></i></span>
                  <h3 class="section-title-two  mb-30 white-color">Solutions for moving better and feeling a healthier</h3>
               </div>
               <div class="row mt-60">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="services-item text-center wow fadeInUp mb-30" data-wow-delay=".6s">
                        <div class="sv-inner sv-inner2">
                           <div class="services-icon">
                              <i class="flaticon-dumbbell"></i>
                           </div>
                        </div>
                        <h4 class="services-item-title services-item-title-2 mb-20"><a href="protfolio-details.html">Weight Lifting</a></h4>
                        <p class="mb-25">Commodo metuse a dictum faucibus felis</p>
                           </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="services-item text-center wow fadeInUp mb-30" data-wow-delay=".9s">
                        <div class="sv-inner sv-inner2">
                           <div class="services-icon">
                              <i class="flaticon-muscle"></i>
                           </div>
                        </div>
                        <h4 class="services-item-title services-item-title-2 mb-20"><a href="protfolio-details.html">Power Yoga</a></h4>
                        <p class="mb-25">Feugiat varius facilisis mus, Commodo metu</p>
                           </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="services-item text-center wow fadeInUp mb-30" data-wow-delay="1s">
                        <div class="sv-inner sv-inner2">
                           <div class="services-icon">
                              <i class="flaticon-customer"></i>
                           </div>
                        </div>
                        <h4 class="services-item-title services-item-title-2 mb-20"><a href="protfolio-details.html">Crosfit Tools</a></h4>
                        <p class="mb-25">Dictum faucibus felis, Feugiat varius facilisis</p>
                           </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="services-item text-center wow fadeInUp mb-30" data-wow-delay="1.4s">
                        <div class="sv-inner sv-inner2">
                           <div class="services-icon">
                              <i class="flaticon-lawn-mower"></i>
                           </div>
                        </div>
                        <h4 class="services-item-title services-item-title-2 mb-20"><a href="protfolio-details.html">Body Building</a></h4>
                        <p class="mb-25">Varius facilisis Dictum faucibus feugiat facil</p>
                           </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- services-list-end -->

         <!-- tpcounter-area -->
         <div class="tpcounter-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="counter-lists">
                        <div class="row g-0">
                           <div class="col-lg-3 col-md-6">
                              <div class="counter-item counter-item-border">
                                 <div class="counter-number">
                                    <h4><span class="counter">330</span></h4>
                                 </div>
                                 <div class="counterinfo">
                                    <i class="flaticon-support"></i>
                                    <span>Expert Trainer</span>
                                 </div>
                                 <div class="counter-shape">
                                    <img src="{{ URL::asset('img/bg/counter-shape.png') }}" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="counter-item counter-item-border">
                                 <div class="counter-number">
                                    <h4><span class="counter">430</span></h4>
                                 </div>
                                 <div class="counterinfo">
                                    <i class="flaticon-feedback"></i>
                                    <span>Client Feedback</span>
                                 </div>
                                 <div class="counter-shape">
                                    <img src="{{ URL::asset('img/bg/counter-shape.png') }}" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="counter-item counter-item-border">
                                 <div class="counter-number">
                                    <h4><span class="counter">230</span></h4>
                                 </div>
                                 <div class="counterinfo">
                                    <i class="flaticon-kettlebells"></i>
                                    <span>Total Branches</span>
                                 </div>
                                 <div class="counter-shape">
                                    <img src="{{ URL::asset('img/bg/counter-shape.png') }}" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="counter-item">
                                 <div class="counter-number">
                                    <h4><span class="counter">540</span></h4>
                                 </div>
                                 <div class="counterinfo">
                                    <i class="flaticon-medal"></i>
                                    <span>Award Winning</span>
                                 </div>
                                 <div class="counter-shape">
                                    <img src="{{ URL::asset('img/bg/counter-shape.png') }}" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- tpcounter-area-end -->

         <div class="trainer-area pb-150 d-none">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-10">
                     <div class="section-wrap-two text-center wow fadeInUp" data-wow-delay=".2s">
                        <span class="tpsub-title-two mb-15"><i class="far fa-circle"></i>Best Trainer<i class="far fa-circle"></i></span>
                        <h3 class="section-title-two  mb-30">Dedicated and professional trainer ready to supporting</h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row mt-35">
                  <div class="col-xxl-3 col-lg-4 col-md-6">
                     <div class="trainer-single wow fadeInUp mb-30" data-wow-delay=".4s">
                        <div class="trainer-image">
                           <a href="team-details.html"><img src="{{ URL::asset('img/trainer/trainer-1.jpg')}}" alt=""></a>
                        </div>
                        <div class="trainer-info">
                           <h5 class="trainer-name"><a href="team-details.html">Desert Antony</a></h5>
                           <p class="mb-20">Fitness Trainer</p>
                           <div class="trainer-soicial-icon">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-instagram"></i></a>
                              <a href="#"><i class="fab fa-google"></i></a>
                           </div>
                        </div>
                        <div class="trainer-btn">
                           <a href="team-details.html" class="tp-btn-square"><i class="fal fa-chevron-double-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6">
                     <div class="trainer-single wow fadeInUp mb-30" data-wow-delay=".8s">
                        <div class="trainer-image">
                           <a href="team-details.html"><img src="{{ URL::asset('img/trainer/trainer-2.jpg') }}" alt=""></a>
                        </div>
                        <div class="trainer-info">
                           <h5 class="trainer-name"><a href="team-details.html">Desert Antony</a></h5>
                           <p class="mb-20">Fitness Trainer</p>
                           <div class="trainer-soicial-icon">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-instagram"></i></a>
                              <a href="#"><i class="fab fa-google"></i></a>
                           </div>
                        </div>
                        <div class="trainer-btn">
                           <a href="team-details.html" class="tp-btn-square"><i class="fal fa-chevron-double-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6">
                     <div class="trainer-single wow fadeInUp mb-30" data-wow-delay="1.2s">
                        <div class="trainer-image">
                           <a href="team-details.html"><img src="{{ URL::asset('img/trainer/trainer-3.jpg') }}" alt=""></a>
                        </div>
                        <div class="trainer-info">
                           <h5 class="trainer-name"><a href="team-details.html">Desert Antony</a></h5>
                           <p class="mb-20">Fitness Trainer</p>
                           <div class="trainer-soicial-icon">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-instagram"></i></a>
                              <a href="#"><i class="fab fa-google"></i></a>
                           </div>
                        </div>
                        <div class="trainer-btn">
                           <a href="team-details.html" class="tp-btn-square"><i class="fal fa-chevron-double-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6">
                     <div class="trainer-single wow fadeInUp mb-30" data-wow-delay="1.4s">
                        <div class="trainer-image">
                           <a href="team-details.html"><img src="{{ URL::asset('img/trainer/trainer-4.jpg') }}" alt=""></a>
                        </div>
                        <div class="trainer-info">
                           <h5 class="trainer-name"><a href="team-details.html">Desert Antony</a></h5>
                           <p class="mb-20">Fitness Trainer</p>
                           <div class="trainer-soicial-icon">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-instagram"></i></a>
                              <a href="#"><i class="fab fa-google"></i></a>
                           </div>
                        </div>
                        <div class="trainer-btn">
                           <a href="team-details.html" class="tp-btn-square"><i class="fal fa-chevron-double-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- trainer-area-end -->

         <!-- company-static-area-start -->
         <div class="company-static-area" style="    margin-top: 157px;" data-background="{{ URL::asset('img/bg/static-bg.jpg') }}"> 
            <div class="container custome-container">
               <div class="row justify-content-center align-items-center">
                  <div class="col-xl-7 col-lg-5 col-md-12">
                     <div class="section-wrap">
                        <span class="tpsub-title mb-15">company statics</span>
                        <h3 class="section-title mb-20">Everything you want outside your comfort zone</h3>
                        <span class="section-border mb-20"><i class="far fa-circle"></i></span>
                        <p class="section-description mb-30">Duis nunc sodales conubia a laoreet aliquet on nostra eleifend lacinia prasent hendrerit quisque penatibus erat a pulvina integer semper ridiculus lectus con dimentum obor tise verodar capmtaso morin</p>
                     </div>
                     <div class="tp-skill--content">
                        <div class="tp-skill__wrapper mb-25 fix">
                            <div class="tp-skill--title__wrapper">
                                <h5 class="tp-skill--title">Client Satisfaction</h5>
                            </div>
                           <div class="progress">
                              <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s" role="progressbar" data-width="90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                           </div>
                        </div>
                        <div class="tp-skill__wrapper mb-30 fix">
                            <div class="tp-skill--title__wrapper">
                                <h5 class="tp-skill--title">Support Customer</h5>
                            </div>
                            <div class="progress progress-two">
                              <div class="progress-bar-two progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s" role="progressbar" data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><span>70%</span></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-7 col-md-12">
                     <div class="tp-calculate mb-30">
                        <div  class="calculate-form-wrapper">
                           <h3 class="tp-calculate-form-title mb-30">BMI Calculator</h3>
                           <div class="input-field mb-15">
                                <input type="text" placeholder="Height" name="height" id="height"> 
                           </div>
                           <div class="input-field mb-15">
                                <input type="text" placeholder="Weight" name="Weight" id="Weight"  >
                           </div>
                           <div class="input-field select-field-arrow mb-15 p-relative">
                                <select  class="nice-select">
                                    <option value="" disabled selected hidden>Gender</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                    <option value="">Other</option>
                                </select>
                           </div>
                           <div class="input-field mb-15">
                              <input type="text" placeholder="Age">
                           </div>
                           {{-- <div class="input-field mb-15">
                                 <input type="text" placeholder="Inches">
                           </div> --}}
                           <div class="input-field">
                                <button type="button"  class="calculate-btn" onclick="getbmifunction()"> Calculate now <i class="fal fa-chevron-double-right"></i></button>
                           </div>
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </div>
                           <div class="swiper-button-prev ts-button ts-button-prev"></div>
                           <div class="swiper-button-next ts-button ts-button-next"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

                     <div class="swiper-button-prev bs-button bs-button-prev"><i class="far fa-long-arrow-left"></i></div>
                     <div class="swiper-button-next bs-button bs-button-next"><i class="far fa-long-arrow-right"></i></div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- blog-area-end -->

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





<script>         
function getbmifunction() {
   $.ajax({

type: "get",
url: "{{ route('getbmi') }}",
data:{
"_token": "{{ csrf_token() }}",
height: $("#height").val(),
Weight: $("#Weight").val(),
},
success: function(data){
   alert("Body mass index is"+data);

}
});
}
</script>   
@endsection