<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\state;
use App\Models\city;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Session;
class UserController extends Controller
{

    function __UserController__(){
       
    return '';
   }
    public function index()

    {  $data = [];
        if(isset(Auth::user()->id)){
            $data['user']= user::where('id',session::get('user_id'))->first();
    
           $data['page'] = "home";
            return view('index',$data);
        }
        $data['page'] = "home";
        return view('index',$data);
    
    
    }
    public function display(){

        $data['page'] = "register";
        $data['countries'] = Country::get(['id','name']);
        return view('register',$data);
}
public function edit(){
    $data['user'] = user::where('email',Auth::user()->email)->first();
    $data['page'] = "editpage";
    $data['countries'] = Country::get(['id','name']);
    $data['state'] = state::get(['id','name']);
    $data['city'] = city::get(['id','name']);
    return view('editprofile',$data);
}
public function displaylogin(){
    $data['page'] = "editpage";
    return view('login', $data); 
}
public function createlogin(Request $request){

    $validatedData = $request->validate([
        'email' => ['required','email', 'max:255'],
        'password' => ['required']

    ]);

    if (Auth::attempt(['email' =>  $request->email, 'password' => $request->password]) == true) {
        
        
    return redirect()->route('/'); 
    }
    else{
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    
   
}
public function logout(){
  
    Auth::logout(); 
return redirect()->route('/'); 
}
public function store(Request $request){
 
    $validatedData = $request->validate([
        'fname' => ['required', 'max:255'],
        'lname' => ['required', 'max:255'],
        'enroll' => ['required', 'max:255'],
        'branch' => ['required', 'max:255'],
        'address' => ['required', 'max:255'],
        'state' => ['required', 'max:255'],
        'city' => ['required', 'max:255'],
        'country' => ['required', 'max:255'],
        'otp' => ['required','required_with:otphidden','same:otphidden'],
        'phone' => ['required', 'max:12'],
        'email' => ['required','email', 'max:255'],
        'pconfirmation' => ['required', 'max:255'],
        'password' => ['required' ,'same:pconfirmation'],
    ]);
    $messages = [
        'otp.same' => 'otp not match'
      ];
         $user = new User;
         $user->fname = $request->fname;
         $user->lname = $request->lname;
         $user->enroll = $request->enroll;
         $user->branch = $request->branch;
         $user->address = $request->address;
         $user->phone = $request->phone;
         $user->state = $request->state;
         $user->city = $request->city;
         $user->country = $request->country;
         $user->email = $request->email;
         $user->password =  bcrypt($request->password);
         $user->save();
         
    return view('login'); 
}
public function update(Request $request){
 
    $validatedData = $request->validate([
        'fname' => ['required', 'max:255'],
        'lname' => ['required', 'max:255'],
        'enroll' => ['required', 'max:255'],
        'branch' => ['required', 'max:255'],
        'address' => ['required', 'max:255'],
        'state' => ['required', 'max:255'],
        'city' => ['required', 'max:255'],
        'country' => ['required', 'max:255'],
        'phone' => ['required', 'max:12'],
    ]);
    $messages = [
        'otp.same' => 'otp not match'
      ];
      $user =Auth::user();
      $user->fname = $request->fname;
      $user->lname = $request->lname;
      $user->enroll = $request->enroll;
      $user->branch = $request->branch;
      $user->address = $request->address;
      $user->phone = $request->phone;
      $user->state = $request->state;
      $user->city = $request->city;
      $user->country = $request->country;
      $user->save();
      return redirect()->route('editprofile'); 
}
}
