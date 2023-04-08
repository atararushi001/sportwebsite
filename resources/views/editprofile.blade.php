@extends('layout.main')

@section('content')
<style>
.error{
   color: brown;
}
</style>
   <div id="preloader">
      <div class="preloader">
         <span></span>
         <span></span>
      </div>
   </div>
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
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
   <div class="body-overlay"></div>
   <main>

      <div class="page__title align-items-center" data-background="assets/img/bg/breadcam-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="page__title-content text-center">
                     <h3 class="breadcrumb-title breadcrumb-title-sd mb-15">update profileb </h3>
                     <div class="page_title__bread-crumb">
                     <nav>
                        <nav class="breadcrumb-trail breadcrumbs">
                           <ul class="breadcrumb-menu" style="display:block;">
                              <li class="breadcrumb-trail">
                                 <a href="index.html"><span>Home</span></a>
                              </li>
                              <li class="trail-item">
                                 <span>update profileb </span>
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
             <form  method="post" action="{{ route('update') }}" class="container" style="margin-top: 50px;" >
               @csrf
            
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="checkbox-form">
                           
                             <div class="row">
                          
                                         {{-- <label>First Name <span class="required">*</span></label>
                                         <input type="text" placeholder="Enter fist name" name="fname" id="fname"  value="{{old('fname')}}"> --}}
                                         <x-inputcomponet type="text" name="fname" label="fname" value="{{$user->fname}}"/>
                                         <x-inputcomponet type="text" name="lname" label="lname"  value="{{$user->lname}}"/>
                                         <x-inputcomponet type="text" name="enroll" label="enroll"  value="{{$user->enroll}}"/>
                                         <x-inputcomponet type="text" name="branch" label="branch"  value="{{$user->branch}}"/>
                                         <x-inputcomponet type="text" name="address" label="address"  value="{{$user->address}}"/>
                                   

                                 <div class="col-md-6">
                                     <div class="checkout-form-list" >
                                         <label>Country<span class="required">*</span></label>
                                         <select  name="country" id="country"  class="form-control valid">
                                         <option value="">Select Country</option>
                                  
                                                  @foreach ($countries as $data)
                                                  @if($data->id  == $user->country)
                                        <option value="{{$data->id }}" selected> {{$data->name}}</option>
                                        @else
                                        <option value="{{$data->id }}" > {{$data->name}}</option>
                                            @endif
                                             @endforeach 
                                          </select>
                                        
                                         @error('country')
                                         <p class="error">{{ $message }}</p> 
                                          @enderror 
                                       </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="checkout-form-list">
                                         <label>State <span class="required">*</span></label>
                                             <select name="state" id="state"  class="form-control">
                                                @foreach ($state as $data)
                                                @if($data->id  == $user->state)
                                      <option value="{{$data->id }}" selected> {{$data->name}}</option>
                                      @else
                                      <option value="{{$data->id }}" > {{$data->name}}</option>
                                          @endif
                                           @endforeach 
                                             </select>
                                             @error('state')
                                             <p class="error">{{ $message }}</p> 
                                              @enderror   
                                     </div>
                                 </div>
                                
                                 <div class="col-md-6">
                                     <div class="checkout-form-list">
                                         <label>Town / City <span class="required">*</span></label>
                                         <select name="city" id="city" class="form-control">
                                          @foreach ($city as $data)
                                          @if($data->id  == $user->city)
                                <option value="{{$data->id }}" selected> {{$data->name}}</option>
                                @else
                                <option value="{{$data->id }}" > {{$data->name}}</option>
                                    @endif
                                     @endforeach 
                                    </select>
                                    @error('city')
                                    <p class="error">{{ $message }}</p> 
                                     @enderror   
                                 </div>
                                 </div>
                                 <x-inputcomponet type="text" name="phone" label="phone"  value="{{$user->phone}}"/>
                                
                                 <div class="col-md-4">
                                 </div>
                                 {{-- <div class="col-md-4">
                                     <div class="checkout-form-list">
                                         <label>Email Address <span class="required">*</span></label>
                                         <input type="text" placeholder="Enter your Email " name="email" id="email" value="{{old('email')}}">
                                         @error('email')
                                         <p class="error">{{ $message }}</p> 
                                          @enderror
                                         
                                     </div>
                                 </div>
                                 <div class="col-md-2">
                                     <div class="checkout-form-list">   
                                     <label>click here to verify <span class="required">*</span></label>
                                     <button type="button" onclick="getotp()" name="varify" class="btn btn-danger" >send</button>
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="checkout-form-list">
                                         <label>otp <span class="required">*</span></label>
                                         <input type="text" placeholder="otp send to your email " name="otp" id="otp" value="{{old('otp')}}">
                                         @error('otp')
                                         <p class="error">{{ $message }}</p> 
                                          @enderror
                                         <input type="hidden" placeholder="otp send to your email " name="otphidden" id="otphidden" value="{{old('otphidden')}}">
                                     </div>
                                 </div> --}}
                                
                                         
                                
                                 
                                 
                         
                               
                             </div>
                         
                         </div>
                     </div>
                                 <div class="order-button-payment mt-20">
                                 <button type="submit" name="register" class="tp-btn-square-lg" class="register" >register</button>
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
    
   <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">x</span>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>         

function getotp() {



   $.ajax({
type: "post",
url: "{{ route('sendtxtmail') }}",
data:{
"_token": "{{ csrf_token() }}",
emailotp: $("#email").val(),
},
success: function(data){
console.log(data.length - 4);
$("#otphidden").val(data.substring(data.length - 4));  
}
});
}
$(document).ready(function () {
 
$('#country').on('change', function () {
   var idCountry = $("#country").val();
   $.ajax({
       url: "{{url('fetchstates')}}",
       type: "GET",
       data: {
           country_id: idCountry,
          _token: '{{csrf_token()}}'
       },
       dataType: 'json',
       success: function (result) {
           $('#state').html('<option value="">-- Select State --</option>');
           $.each(result.states, function (key, value) {
              $("#state").append('<option value="' + value.id + '">' + value.name + '</option>');
           });
           $('#city').html('<option value="">-- Select City --</option>');
       }
   });
});


$('#state').on('change', function() {
var state_id =  $("#state").val();
$("#city").html('');
$.ajax({
url:"{{url('fetchcities')}}",
type: "GET",
data: {
state_id: state_id,
_token: '{{csrf_token()}}'
},
dataType : 'json',
success: function(result){

$('#city').html('<option value="">-- Select City --</option>');
console.log(result);
$.each(result.cities,function(key,value){
$("#city").append('<option value="'+value.id+'">'+value.name+'</option>');
});
}
});
});
});

</script>
   @endsection
   