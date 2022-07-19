<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
   
public function index()
{
  

    
    $users=User::all();
    return view('backend.user.userlist',[
        'users'=>$users
    ]);
}


public function show($user)
{

  
 $usershow=User::findOrFail($user);
 return view('backend.user.show',compact('usershow'));
     
 }
public function edit($user)
{
      
      $useredit=User::findOrFail($user);
      return view('backend.user.edit',compact('useredit'));  
}
 
  public function update(Request $request,$user)
 {
       $userupdate=User::findOrFail($user);
       $userupdate->update([
         'name'=>$request->name,
         'email'=>$request->email,
         
        ]
        );
        return redirect()->route('users.index')->withMessage('Successfully updated');
       
 }

public function destroy($user)
{
      $user=User::findOrFail($user)->delete();
      return redirect()->route('users.index')->withMessage('Successfully Data Deleted');       
}
public function user()
{
      return view('auth.register');
}
     


}
