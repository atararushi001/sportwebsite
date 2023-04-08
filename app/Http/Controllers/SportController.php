<?php

namespace App\Http\Controllers;
use App\Models\equipment;
use App\Models\userequipment;
use Illuminate\Http\Request;
use DB;
use Auth;
class SportController extends Controller
{
    function __SportController__(){
       
        return '';
       }
    public function index(){

        return '';
    
    }
    public function addequipment(Request $request){
        $equipment = equipment::where('id',$request->qu_id)->first();
        DB::update('update equipment set inuse = ? where id = ?',[$equipment->num-1,$request->qu_id]);
        $userequipments = new userequipment;
        $userequipments->user_id =Auth::user()->id;
        $userequipments->addequipmentname= $request->qu_id ;
        $userequipments->save();
       
        return redirect()->route('sport'); 

    }
    public function price(){

        return view('price');
    
    }
    public function display(){
        $data['equipment'] = equipment::get();
        $data['page'] = "sport";
        return view('getsport',$data);
}
public function getbmi(Request $request){
echo $request->height /($request->height*$request->height);
}
}
