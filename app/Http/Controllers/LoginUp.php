<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\usuarios;
use Session;
use Alert;

class LoginUp extends Controller
{
   public function logUpdate(){
      $user=Session::get('sesionidu');
    
      $Upuser = usuarios::where('idu', '=', $user)
      ->get();
   
return view('V_Admin.Form')
->with("Upuser",$Upuser[0]);
   }

public function MUser($idu){
   if($idu==1){
   Session::flash('info','Infomacion Completada');
   return view('Administrador');
}
else{
   echo "Hola";
   return view('Home');
}
}

}
