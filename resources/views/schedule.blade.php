
@extends('layout/main')
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
                        <h3 class="breadcrumb-title breadcrumb-title-sd mb-15">register &&  login </h3>
                        <div class="page_title__bread-crumb">
                        <nav>
                           <nav class="breadcrumb-trail breadcrumbs">
                              <ul class="breadcrumb-menu" style="display:block;">
                                 <li class="breadcrumb-trail">
                                    <a href="index.html"><span>Home</span></a>
                                 </li>
                                 <li class="trail-item">
                                    <span>our schedule </span>
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
      <!-- top-nav-end -->

      <!-- sidebar area start -->

      <div class="schedule-area pb-110 mt-5">
            <div class="container custome-container">
               <div class="section-wrap-two text-center">
                  <span class="tpsub-title-two mb-15"><i class="far fa-circle"></i>our schedule<i class="far fa-circle"></i></span>
                  <h3 class="section-title-two  mb-30">Check our every special gemoxe schedule for you </h3>
               </div>
            </div>
            <div class="schedule-shape-bg fix">
               <img src="assets/img/features/schedule-shape.png"  class="img-fluid" alt="">
            </div>
            <div class="schedule-shape-one fix">
               <img src="assets/img/features/schedule-shape-1.png"  class="img-fluid" alt="">
            </div>
            <div class="schedule-shape-two fix">
               <img src="assets/img/features/schedule-shape-2.png"  class="img-fluid" alt="">
            </div>
            <div id="futexo-classes-area" class="mt-65">
               <div class="container custome-container">
                   <div class="futexo-classes-content">
                       <div class="row justify-content-center">
                           <div class="col-lg-12">
                               <div class="futexo-classes-tab">
                                   <div class="tab-content current">
                                       <div class="futexo-tab-d futexo-tab-all">
                                          <span class="schedule-icon">
                                             <i class="flaticon-muscle"></i>
                                          </span>
                                          <ul style="display:block;">
                                             <li><span class="time">07:00 am</span></li>
                                             <li><span class="time">10:00 am</span></li>
                                             <li><span class="time">04:00 pm</span></li>
                                             <li><span class="time">06:00 pm</span></li>
                                             <li><span class="time">08:00 pm</span></li>
                                          </ul>
                                       </div>
                                       <div class="futexo-tab-all">
                                          <h5>sunday</h5>
                                          <ul style="display:block;">
                                              <li><span>Boxing</span>Alena Jopsep</li>
                                              <li><span>Cardio</span>Bull Mentor</li>
                                              <li><span>Yoga</span>Fiter Jamson</li>
                                              <li><span>Cardio</span>Bull Mentor</li>
                                              <li><span>Ultragym</span>Roser Mack</li>
                                          </ul>
                                       </div>
                                       <div class="futexo-tab-all">
                                           <h5>Monday</h5>
                                           <ul style="display:block;">
                                               <li><span>Ultragym</span>Roser Mack</li>
                                               <li><span>Aerobics</span>Bull Mentor</li>
                                               <li></li>
                                               <li><span>Aerobics</span>Bull Mentor</li>
                                               <li><span>Boxing</span>Alena Josep</li>
                                           </ul>
                                       </div>
                                       <div class="futexo-tab-all">
                                       <h5>Tuesday</h5>
                                       <ul style="display:block;">
                                           <li><span>Yoga</span>Fiter Jamson</li>
                                           <li><span>Ultragym</span>Younji</li>
                                           <li><span>Yoga</span>Fiter Jamson</li>
                                           <li><span>Boxing</span>Franky</li>
                                           <li></li>
                                       </ul>
                                       </div>
                                       <div class="futexo-tab-all">
                                          <h5>Wednesday</h5>
                                          <ul style="display:block;">
                                             <li><span>Aerobics</span>Madara</li>
                                             <li></li>
                                             <li><span>Ultragym</span>Fiter Jamson</li>
                                             <li></li>
                                             <li><span>Ultragym</span>Roser Mack</li>
                                          </ul>
                                       </div>
                                       <div class="futexo-tab-all">
                                          <h5>Thursday</h5>
                                          <ul style="display:block;">
                                             <li><span>Cardio</span>Cosmo Kito</li>
                                             <li><span>Boxing</span>Iqbal Mentor</li>
                                             <li><span>Yoga</span>Fiter Jamson</li>
                                             <li><span>Aerobics</span>Bull Mentor</li>
                                             <li><span>Ultragym</span>Roser Mack</li>
                                          </ul>
                                       </div>
                                       <div class="futexo-tab-all">
                                          <h5>Friday</h5>
                                          <ul style="display:block;">
                                             <li></li>
                                             <li><span>Yoga</span>Bull Mentor</li>
                                             <li><span>Cardio</span>Bull Mentor</li>
                                             <li><span>Ultragym</span>Roser Mack</li>
                                             <li><span>Yoga</span>Fiter Jamson</li>
                                          </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
       
            </div>
         </div>
       
      <!-- footer-area-start -->
  
       
      <!-- footer-area-end -->

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
      <!-- modal-search-end -->

      <script>
function getstate(val) {
	//alert(val);
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'coutrycode='+val,
	success: function(data){
		$("#statelist").html(data);
	}
	});
}

function getcity(val) {
	//alert(val);
	$.ajax({
	type: "POST",
	url: "get_city.php",
	data:'statecode='+val,
	success: function(data){
		$("#city").html(data);
	}
	});
}
</script>	

@endsection