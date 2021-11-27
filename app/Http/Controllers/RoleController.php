<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function index(){
    	$roles = Role::all();

    	return view('manajemen_roles.indexrole', ['roles' => $roles]);
    }

    public function tambahrole(){
    	$roles = Role::all();

    	return view('manajemen_roles.tambah_role', ['roles' => $roles]);
    }

    public function create(Request $request){
    	Role::create([
            'role' => $request->role,
        ]);

        return redirect()->route('manajemenrole')->with('success','Anda Berhasil Menambahkan Role');
    }

    public function editrole($id)
    {
        $roles = Role::where('id', $id)->first();
        return view('manajemen_roles.editrole')->with(compact('roles'));
    }

    public function updaterole(Request $request)
    {

        $roles = Role::where('id', $request->id)->update([
            'role' => $request->role,

        ]);

        return redirect()->route('manajemenrole')->with('success','Role telah terupdate');
    }

    public function delete($id)
    {
        $roles = Role::where('id', $id)->delete();

        return redirect()->route('manajemenrole')->with('success','Role telah Terhapus');
    }
}
