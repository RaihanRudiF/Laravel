<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table ='dosen';
    protected $primarykey = 'id';
    protected $fillable=['id','nama','jk','matkul'];
}
