<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    //
     
      // afficher le dashboard admin
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function profile(){
      return view('admin.profile');
  }

  public function updateProfile(Request $request){
        
    Auth::user()->name = $request->name;
    Auth::user()->email = $request->email;
    if($request->password){ //if il y a mot de passe
        Auth::user()->password = Hash::make($request->password);
    }
    Auth::user()->update();
    
    return redirect('admin/profile')->with('success', 'admin modifier avec succée');
}
public function clients(){
  $clients =user::where('role','user')->get();

  return view('admin.clients.index')->with('clients' , $clients);
}
public function BloquerUser( $iduser){
  $clients =user::find($iduser);
  $clients->is_active = false;
  $clients->update();

  return redirect()->back()->with('success','client bloquee' );
}

}
