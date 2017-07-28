<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswas extends Model
{
    //
    protected $table="siswas";
    protected $fillable = ['nama','ttl','jk','alamat','kelas'];
    protected $visible = ['nama','ttl','jk','alamat','kelas'];
    public $timestamps = true;
}
