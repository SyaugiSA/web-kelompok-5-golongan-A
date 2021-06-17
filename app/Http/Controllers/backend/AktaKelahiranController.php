<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class AktaKelahiranController extends Controller
{
    public function index()
    {
        return view('backend.aktakelahiran.index');
    }
}
