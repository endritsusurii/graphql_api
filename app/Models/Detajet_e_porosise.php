<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detajet_e_porosise extends Model
{
    use HasFactory;

    protected $fillable = [
        'produkt_id',
        'sasia_e_porosise',
        'cmimi_i_produktit',
        'shuma_totale',
    ];

    public function porosite(){
        return $this->hasOne(Porosite::class);
    }
    public function produktet() {
        return $this->belongsTo(Produktet::class);
    }
}
