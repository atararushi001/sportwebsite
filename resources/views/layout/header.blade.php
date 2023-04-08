@php $userid= Session::get('user_id'); @endphp 
<header class="top-nav">
         <div class="top-address d-none d-lg-block">
            <div class="container" style="padding:0px;">
               <div class="row align-items-center">
                  <div class="col-xxl-7 col-xl-5 col-lg-4 col-md-3">
                     <div class="top-logo">
                        <a href="#"><img src="{{ URL::asset('/img/logo/logo.png') }}" alt=""></a>
                     </div>
                  </div>
                  <div class="col-xxl-5 col-xl-7 col-lg-8 col-md-9">
                     <div class="topbar-info">
                        <div class="contact-item">
                           <i class="flaticon-pin"></i>
                           <div class="content">
                              <p>Our Location</p>
                              <a href="https://www.google.com/maps/search/25%2F7+Barden,+London/@51.5287718,-0.2416803,11z/data=!3m1!4b1" target="blank">Rku hostel</a>
                           </div>
                        </div>
                        <div class="contact-item">
                           <i class="flaticon-email"></i>
                           <div class="content">
                              <p>Online Support</p>
                              <a href="mailto:rkugym@rku.ac.in">rkugym@rku.ac.in</a>
                           </div>
                        </div>
                        <div class="contact-item">
                           <i class="flaticon-contact"></i>
                           <div class="content">
                              <p>Free Contact</p>
                              <a href="tel:7984648758">7984648758</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="menu-area" id="header-sticky">
            <div class="container">
               <div class="row align-items-center justify-content-center">
                  <div class="col-xxl-12 col-xl-12 col-lg-12">
                     <!-- <div class="topcontact-btn f-right d-none d-lg-block">
                        <div class="contact-btn">
                           <a href="contact.html" class="top-btn">Contact Us <i class="fal fa-chevron-double-right"></i></a>
                        </div>
                     </div> -->
                     <div class="menu-content" style="width:100%;">
                        <div class="top-logo d-lg-none">
                           <a href="index.html"><img src="{{ URL::asset('img/logo/logo.png') }}" alt=""></a>
                        </div>
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                 <li><a href="/" class="active">Home </a></li>
                                 <!-- <li><a href="about.php">About </a></li>
                            -->
                            <li><a href="contact">Contact </a></li>
                            <li><a href="schedule">our schedule </a></li>   
                            @if(!isset(Auth::user()->email))
                                 <li><a href="{{ route('register') }}">register  </a>
                                 </li>   

                                 <li><a href="{{ route('login') }}">login </a>
                                 </li>
                                 @else
                                 <li><a href="{{ route('logout') }}">logout </a>
                                 </li> 
                                 <li> <a href="{{ route('editprofile') }}">Update Profile</a></li>
                               @endif
                               
                                  
                                  
                           </nav>
                        </div>
                                 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>