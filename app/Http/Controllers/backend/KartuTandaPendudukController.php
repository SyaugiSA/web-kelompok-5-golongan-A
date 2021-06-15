<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\KartuTandaPenduduk;

use Storage;

class KartuTandaPendudukController extends Controller
{
    public function index()
    {
        // mengambil semua data yang ada pada table kartutandapenduduk
        // seperti syntax select * from kartutandapenduduk
        $ktp_list = KartuTandaPenduduk::all();


        //mengembalikan variable $ktp_list untuk ditampilan di view/backend.kartutandapenduduk.index
        return view('backend.kartutandapenduduk.index', compact('ktp_list'));
    }

    public function create()
    {
    }

    //pada method edit ini digunakan untuk mengambuil data pendaftar kartu tanda penduduk berdasarkan nomer nik nya
    public function edit($nik)
    {
        //syntax ini digunakan untuk menumakan data user sepeti nik yang dicari
        $kartutandapenduduk = KartuTandaPenduduk::find($nik);

        //mengembalikan nomer nik yang sudah ditemukan lalu dikirim menuju view/backend.kartutandapenduduk.edit
        return view('backend.kartutandapenduduk.edit', ['kartutandapenduduk' => $kartutandapenduduk]);
    }

    public function update($nik, Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|numeric',
            'no_kk' => 'required|numeric',
            'agama' => 'required',
            'perkawinan' => 'required',
            'gol_darah' => 'required',
            'pekerjaan' => 'required'
        ]);

        $kartutandapenduduk = KartuTandaPenduduk::FindOrFail($nik);
        // dd($request->all());
        $kartutandapenduduk->nik = $request->nik;
        $kartutandapenduduk->no_kk = $request->no_kk;
        $kartutandapenduduk->agama = $request->agama;
        $kartutandapenduduk->perkawinan = $request->perkawinan;
        $kartutandapenduduk->gol_darah = $request->gol_darah;
        $kartutandapenduduk->pekerjaan = $request->pekerjaan;
        $kartutandapenduduk->save();
        return redirect('kartutandapenduduk');
    }
}
