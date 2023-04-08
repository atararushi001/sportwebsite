
@extends('layout.main')

@section('content')
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- Add your site or application content here -->

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
                        <h3 class="breadcrumb-title breadcrumb-title-sd mb-15">sport</h3>
                        <div class="page_title__bread-crumb">
                        <nav>
                           <nav class="breadcrumb-trail breadcrumbs">
                              <ul class="breadcrumb-menu" style="display:block;">
                                 <li class="breadcrumb-trail">
                                    <a href="index.html"><span>Home</span></a>
                                 </li>
                                 <li class="trail-item">
                                    <span>equipmentes</span>
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


         <div class="checkout-area pb-85">
            <div class="container">
               <form action="{{ route('addequipment') }}" method="post">
                  @csrf 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkbox-form">
                                <h3>Sports </h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="country-select">
                                        
                                            <label > equipment  name<span class="required">*</span></label>
                                            <select name="qu_id" >
                                             <option value="">--------select and option-------</option>
                                         @foreach($equipment  as $eq)
                                         <option value="{{$eq->id}}">{{$eq->name}}</option>
                                         @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>quantity of  equipment<span class="required">*</span></label>
                                            <input type="text" placeholder="quantity of  equipment" name="numused">
                                        </div>
                                    </div>
                                    <div class="order-button-payment mt-20">
                                    <button type="submit" class="tp-btn-square-lg" name="add">add</button>
                                    </div>
                                  
                                </div> 
                            </div>
                        </div> 
                    </div>
                </form>
            </div>
         </div>
         <!-- checkout-area-end -->

      </main>

      <!-- footer-area-start -->
      
      @endsection