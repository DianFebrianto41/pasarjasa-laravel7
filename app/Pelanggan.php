<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = "pelanggan";
    protected $guarded = [];

    /**
     * Get the penyediajasa that owns the Pelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penyediajasa()
    {
        return $this->belongsTo(Penyediajasa::class);
    }
}
