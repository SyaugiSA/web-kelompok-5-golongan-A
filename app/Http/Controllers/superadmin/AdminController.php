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
        $admin = DB::table('admin')->get();
        return view('superadmin.admin.index',compact('admin'));
    }
    public function create()
    {
        $admin = null;
        return view('superadmin.admin.create',compact('admin'));
    }
    public function store(Request $request)
    {
        DB::table('admin')->insert([
            'id' => $request->id,
            'nama' => $request->nama,
            'password' => $request->password
        ]);

        return redirect()->route('admin.index')
                        ->with('success','Data Admin baru telah berhasil disimpan.');
    }
    public function edit($id)
    {
        $admin = DB::table('admin')->where('id',$id)->first();
        return view('superadmin.admin.create', compact('admin'));
    }
    public function update(Request $request)
    {
        DB::table('admin')->where('id',$request->id)->update([
            'id' => $request->id,
            'nama' => $request->nama,
            'password' => $request->password
        ]);

        return redirect()->route('admin.index')
                        ->with('success','Data Admin Berhasil Diperbaharui');
    }
    public function destroy($id)
    {
        DB::table('admin')->where('id',$id)->delete();
        return redirect()->route('admin.index')
                        ->with('success','Data Admin Berhasil Dihapus');
    }

}
