<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SuperController extends Controller
{
    public function index()
    {
        return view('superadmin.superhome');
    }
}
