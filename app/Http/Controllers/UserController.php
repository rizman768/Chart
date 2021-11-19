<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
    	$users = User::all();

        return view('manajemen_users.index')->with(compact('users'));

    }

    public function tambahuser(){

    	return view('manajemen_users.tambah_user');
    }
    
    public function create(Request $request){
    	User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect()->route('manajemenuser')->with('success','Akun Anda Berhasil dibuat');
    }

    public function edituser($id){
   		$users = User::where('id', $id)->first();

        return view('manajemen_users.edit')->with(compact('users'));
    }

    public function update(Request $request){
    	$users = User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
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
