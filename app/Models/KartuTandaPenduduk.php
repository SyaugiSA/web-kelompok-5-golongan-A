<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuTandaPenduduk extends Model
{
    //menambahkan protected $table 
    protected $table = 'kartutandapenduduk';

    //mendefinisikan primary key adalah nik
    protected $primaryKey = 'nik';

    //menambahkan fillable
    //Variable $fillable berguna untuk mendaftarkan atribut (nama kolom) yang bisa kita isi ketika melakukan insert atau update ke database
    protected $fillable = [
        'no_reg', 'nik', 'Nama_Lengkap', 'foto_diri', 'no_KK', 'surat_keterangan'
    ];
}