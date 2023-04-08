<?php

namespace App\Http\Controllers;
use App\Models\userequipment;
use App\Models\equipment;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DB;
class AdminController extends Controller
{
    public function index(){  
            $data['user']= user::get();
         $data['equipment']= equipment::get();
            return view('admin.index',$data);
    
    }
    public function adminlogindisplay(){
        return view('admin.login');
    }
    public function returnequqment($id){

      echo $id;
      DB::delete('delete from userequipments where addequipmentname = ?',[$id]);


      return redirect()->route('equipment'); 

        
    }
    public function deleteuser($id){

        echo $id;
        DB::delete('delete from users where id = ?',[$id]);
  
  
        return redirect()->route('admin'); 
  
          
      }
    public function adminlogin(Request $request){
        if (Auth::attempt(['email' =>  $request->email, 'password' => $request->password,'admin' =>'1']) == true) {
        
        
            return redirect()->route('admin'); 
            }
            else{
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ])->onlyInput('email');
            }
    }
    public function equipment(){  
       
        $data['userequipment']= userequipment::join('users', 'users.id', '=', 'userequipments.user_id')->join('equipment','userequipments.addequipmentname','=','equipment.id')->get();
        

        return view('admin.userequipment',$data);
    


}

public function addequipment(){  
       
   
    return view('admin.equipment');


}


public function storeequipment(Request $request) {  
    $equipment = new equipment;
    $equipment->name= $request->name ;
    $equipment->num= $request->num ;
    $equipment->save();

 
   return redirect()->route('addequipment'); 

}

public function equipmentlist(){  
       
    $data['userequipment']= equipment::get();
    
//         print_r($data['userequipment']);
// exit();

    return view('admin.equipmentlist',$data);



}
}
