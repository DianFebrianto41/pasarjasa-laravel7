<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Informasi extends Model
{

    use Notifiable;
    //
    protected $table='informasi';
     
    protected $primaryKey = 'id';

    protected $fillable  = ['id', 'judul','deskripsi', 'file', 'keterangan'];
}
