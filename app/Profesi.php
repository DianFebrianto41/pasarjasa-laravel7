<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesi extends Model
{
    //
    protected $table='profesi';
     
    protected $primaryKey = 'id';

    protected $fillable  = [ 'id', 'nama'];

    public function Penyediajasa(){
        // Satu jasa memiliki banyak penyediajasa (orang)
        return $this->hasMany(Penyediajasa::class);
    }
}
