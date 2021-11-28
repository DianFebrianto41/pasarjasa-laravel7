<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyediajasa extends Model
{
    //
   protected $table = "penyediajasa";

   protected $primaryKey = "id";

   protected $fillable  = [ 'id', 'profesi_id' ,'nama','alamat', 'file', 'keterangan'];


   public function Profesi(){

    // satu orang dimiliki oleh kategori
       return $this->belongsTo(Profesi::class);
   }

   public function Pelanggan(){
       return $this->hasMany(Pelanggan::class);
   }
}
