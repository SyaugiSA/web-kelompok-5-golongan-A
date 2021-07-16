<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuTandaPenduduk extends Model
{
    //menambahkan protected $table 
    protected $table = 'kartu_tanda_penduduks';

    //mendefinisikan primary key adalah nik
    protected $primaryKey = 'No_Reg';


    //menambahkan fillable
    //Variable $fillable berguna untuk mendaftarkan atribut (nama kolom) yang bisa kita isi ketika melakukan insert atau update ke database
    protected $fillable = [
        'No_Reg', 'NIK', 'Nama_Lengkap', 'status', 'foto_diri', 'no_KK', 'surat_keterangan', 'tanggal'
    ];
}
