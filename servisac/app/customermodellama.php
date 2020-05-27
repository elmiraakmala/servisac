<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customermodel extends Model
{
     protected $table = 'customer'; //'customer' ini adalah untuk pemanggilan tabel customer
    protected $fillable = 
    ['namacustomer','gender','alamat','kota','hp','user_id']; //penamaannya harus sesuai database
}
