<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\KartuTandaPenduduk;
use Illuminate\Http\Request;

class KartuTandaPendudukController extends Controller
{
    public function index()
    {
        // mengambil semua data yang ada pada table kartutandapenduduk
        // seperti syntax select * from kartutandapenduduk
        $kartutandapenduduk = KartuTandaPenduduk::orderBy('created_at', 'DESC')
            ->paginate(20);


        //mengembalikan variable $ktp_list untuk ditampilan di view/backend.kartutandapenduduk.index
        return view('backend.kartutandapenduduk.index', ['kartutandapenduduk' => $kartutandapenduduk]);
    }

    public function detail($No_Reg)
    {
        //pada method find::id digunakan untuk menemukan no_reg yang sesuai di table akta_kelahiran
        $kartutandapenduduk = KartuTandaPenduduk::find($No_Reg);

        // passing ke view backend.altakelahiran.detail
        return view('backend.kartutandapenduduk.detail', ['kartutandapenduduk' => $kartutandapenduduk]);
    }
    public function update($No_Reg, Request $request)
    {


        $this->validate($request, [
            'status' => 'required'
        ]);

        $kartutandapenduduk = KartuTandaPenduduk::find($No_Reg);
        // dd($kartutandapenduduk);
        $kartutandapenduduk->status = $request->status;
        $kartutandapenduduk->save();

        return redirect('kartutandapenduduk');
    }
}
