<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $admin = DB::table('users')->where('hak_akses',2)->get();
        return view('superadmin.admin.index',compact('admin'));
    }
    public function create()
    {
        $admin = null;
        return view('superadmin.admin.create',compact('admin'));
    }
    public function store(Request $request)
    {
        DB::table('users')->insert([
            'email'=> $request->id,
            'password' => $request->password,
            'hak_akses'=>2
        ]);

        return redirect()->route('super.index')
                        ->with('success','Data Admin baru telah berhasil disimpan.');
    }
    public function edit($id)
    {
        $user = DB::table('users')->where('id',$id)->first();
        return view('superadmin.admin.create', compact('user'));
    }
    public function update(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'email'=> $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('super.index')
                        ->with('success','Data Admin Berhasil Diperbaharui');
    }
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect()->route('super.index')
                        ->with('success','Data Admin Berhasil Dihapus');
    }

}