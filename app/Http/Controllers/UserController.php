<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index(){
    	$users = User::all();

        return view('manajemen_users.indexuser')->with(compact('users'));

    }

    public function tambahuser(){

        $role = Role::all();
    	return view('manajemen_users.tambah_user',['role' => $role]);
    }
    
    public function create(Request $request){
    	User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id,
            'remember_token' => Str::random(60),
        ]);

        return redirect()->route('manajemenuser')->with('success','Akun Anda Berhasil dibuat');
    }

    public function edituser($id){
   		$users = User::where('id', $id)->first();
         $role = Role::all();

        return view('manajemen_users.edit')->with(compact('users','role'));
    }

    public function update(Request $request){
    	$users = User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'remember_token' => Str::random(60),
        ]);

        return redirect()->route('manajemenuser')->with('success','Akun telah terupdate');
    }

    public function delete($id)
    {
        $users = User::where('id', $id)->delete();

        return redirect()->route('manajemenuser')->with('success','Akun telah Terhapus');
    }
}
