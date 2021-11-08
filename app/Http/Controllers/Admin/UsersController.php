<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Gate; 
use Illuminate\Http\Request;

class UsersController extends Controller
{

    // If user is not loggedin will redirected to login Page: 
    public  function __construct(){

        $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users=User::all(); 
        return view('admin.users.index')->with('users',$users); 
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // Dump and die-- helper function.
        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index')); 
        }


       $roles=Role::all(); 
       return view('admin.users.edit')->with([
           'user' =>$user,
           'roles' =>$roles

       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        ///
        
        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index')); 
        }

        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index'); 

    }
}
