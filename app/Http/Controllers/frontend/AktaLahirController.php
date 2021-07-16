<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\AktaLahir;
use Illuminate\Support\Facades\Auth;


class AktaLahirController extends Controller
{
    public function index()
    {
        $user = Auth::user()->NIK;
        $data = DB::table('akta_kelahirans')->where('nik_pemohon', '=', $user)->get();
        // dd($data);

        return view('frontend.aktakelahiran_user.index', compact('data', 'user'));
    }

    public function create()
    {
        return view('frontend.aktakelahiran_user.create');
    }

    public function store(Request $request)
    {
        $message = [
            'required' => 'form ini wajib diisi!',
            'numeric' => 'form ini wajib menggunakan angka!',
            'alpha' => 'form ini wajib menggunakan huruf!',
            'max' => 'form ini maksimal 16 angka'
        ];

        $this->validate($request, [
            'nik_pemohon' => 'required|numeric|min:16',
            'nama_lengkap' => 'required|max:100',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|max:30',
            'tanggal_lahir' => 'required',
            'waktu_lahir' => 'required',
            'tempat_dilahirkan' => 'required|max:27',
            'jenis_kelahiran' => 'required',
            'kelahiran_ke' => 'required|numeric|max:2',
            'penolong_kelahiran' => 'required',
            'berat' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'no_KK' => 'required|numeric|min:16',
            'nama_kepala_keluarga' => 'required|alpha|max:100',
            'noHP' => 'required|numeric|min:12',
            'file_administrasi' => 'required|file'
        ], $message);

        $file_administrasi = $request->file('file_administrasi');

        $nama_file_administrasi = time() . "_" . $file_administrasi->getClientOriginalName();

        $tujuan_upload = 'data_administrasi';

        $path = $file_administrasi->store('public/files/file_administrasi');

        AktaLahir::create([
            'nik_pemohon' => $request->nik_pemohon,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'waktu_lahir' => $request->waktu_lahir,
            'tempat_dilahirkan' => $request->tempat_dilahirkan,
            'jenis_kelahiran' => $request->jenis_kelahiran,
            'kelahiran_ke' => $request->kelahiran_ke,
            'penolong_kelahiran' => $request->penolong_kelahiran,
            'berat' => $request->berat,
            'tinggi' => $request->tinggi,
            'no_KK' => $request->no_KK,
            'nama_kepala_keluarga' => $request->nama_kepala_keluarga,
            'noHP' => $request->noHP,
            'status' => 'menunggu',
            'file_administrasi' => $path
        ]);
        return redirect('aktakelahiran_user');
    }
}
