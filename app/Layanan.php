<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    //

    protected $table = "layanan";

    protected $primaryKey = "id";

    protected $fillable = ['id', 'judul', 'file', 'keterangan'];
}
