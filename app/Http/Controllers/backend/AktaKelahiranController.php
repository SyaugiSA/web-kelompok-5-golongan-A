<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\AktaKelahiran;
use Illuminate\Http\Request;

class AktaKelahiranController extends Controller
{
    public function index()
    {
        // mengambil semua data akta kelahiran dengan fungsi all dari database sama dengan query select*from akta_kelahiran
        $aktakelahiran = AktaKelahiran::orderBy('created_at', 'DESC')
            ->paginate(20);

        // passing ke view backend.altakelahiran.index
        return view('backend.aktakelahiran.index', ['aktakelahiran' => $aktakelahiran]);
    }
    public function detail($No_Reg)
    {
        //pada method find::id digunakan untuk menemukan no_reg yang sesuai di table akta_kelahiran
        $aktakelahiran = AktaKelahiran::find($No_Reg);

        // passing ke view backend.altakelahiran.detail
        return view('backend.aktakelahiran.detail', ['aktakelahiran' => $aktakelahiran]);
    }

    public function update($No_Reg, Request $request)
    {
        $this->validate($request, [
            'status' => 'required'
        ]);
        $aktakelahiran = AktaKelahiran::find($No_Reg);
        // dd($aktakelahiran);
        $aktakelahiran->status = $request->status;
        $aktakelahiran->save();

        return redirect('aktakelahiran');
    }

    public function update_nik($No_Reg, Request $request)
    {
        $this->validate($request, [
            'NIK' => 'required'
        ]);
        $aktakelahiran = AktaKelahiran::find($No_Reg);

        $aktakelahiran->NIK = $request->NIK;
        $aktakelahiran->save();

        return redirect('aktakelahiran');
    }
}
