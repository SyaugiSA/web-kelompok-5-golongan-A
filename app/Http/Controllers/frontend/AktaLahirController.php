<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\AktaLahir;

class AktaLahirController extends Controller
{
    public function index()
    {
        // mengambil semua data akta kelahiran dengan fungsi all dari database sama dengan query select*from akta_kelahiran
        $aktalahir = AktaLahir::all();

        // passing ke view backend.altakelahiran.index
        return view('frontend.aktalahir.index', ['aktalahir' => $aktalahir]);
    }
    public function detail($No_Reg)
    {
        //pada method find::id digunakan untuk menemukan no_reg yang sesuai di table akta_kelahiran
        $aktalahir = AktaLahir::find($No_Reg);

        // passing ke view backend.altakelahiran.detail
        return view('frontend.aktalahir.detail', ['aktalahir' => $aktalahir]);
    }
}
