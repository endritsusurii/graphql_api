<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porosite extends Model
{
    use HasFactory;

    protected $fillable = [
        'klientet_id',
        'detajet_e_porosise_id',
        'data_e_dergeses',
        'statusi',
        'koment',
    ];

    public function klientet(){
        return $this->belongsTo(Klientet::class);
    }
    public function detajet_e_porosise(){
        return $this->hasOne(Detajet_e_porosise::class);
    }
}
