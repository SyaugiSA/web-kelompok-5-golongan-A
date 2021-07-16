<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AktaKelahiran;
use App\Models\KartuTandaPenduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KartuTandaPendudukUserController extends Controller
{
    public function index()
    {

        $user = Auth::user()->NIK;
        $ktp = KartuTandaPenduduk::all();
        $data = DB::table('kartu_tanda_penduduks')->where('NIK', '=', $user)->get();
        // dd($data);
        if ($data != null) {
            return view('frontend.ktp_user.index', compact('data', 'ktp', 'user'));
        } else {
            return view('frontend.ktp_user.index', compact('data', 'ktp', 'user'));
        }
    }

    public function create($user)
    {

        $nik_akta = DB::table('akta_kelahirans')->where('NIK', '=', $user)->first('NIK');
        // dd($nik_akta)

        if ($nik_akta == null) {
            return redirect('ktp_user')
                ->with('success', 'data anda belum terdaftar');
        }
        $aktakelahiran = DB::table('akta_kelahirans')->where('NIK', '=', $user)->first();


        return view('frontend.ktp_user.create', ['aktakelahiran' => $aktakelahiran]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $message = [
            'required' => 'form ini wajib di isi!'
        ];

        $this->validate($request, [
            'foto_diri' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'surat_keterangan' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal' => 'required'
        ], $message);

        $foto_diri = $request->file('foto_diri');
        $surat_keterangan = $request->file('surat_keterangan');

        $nama_foto_diri = time() . "_" . $foto_diri->getClientOriginalName();
        $nama_surat_keterangan = time() . "_" . $surat_keterangan->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $foto_diri->move($tujuan_upload, $nama_foto_diri);
        $surat_keterangan->move($tujuan_upload, $nama_surat_keterangan);

        KartuTandaPenduduk::create([
            'NIK' => $request->NIK,
            'Nama_Lengkap' => $request->Nama_Lengkap,
            'foto_diri' => $nama_foto_diri,
            'no_KK' => $request->no_KK,
            'tanggal' => $request->tanggal,
            'status' => 'Menunggu',
            'surat_keterangan' => $nama_surat_keterangan,
        ]);

        return redirect('ktp_user');
    }
}
