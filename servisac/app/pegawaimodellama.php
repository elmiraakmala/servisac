<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawaimodel extends Model
{
    protected $table = 'pegawai'; //'pegawai' ini adalah untuk pemanggilan tabel pegawai
    protected $fillable = 
    ['namapegawai','gender','alamat','kota','hp','user_id']; //penamaannya harus sesuai database
}
