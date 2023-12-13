<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Nurse extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaNurse',
        'pendidikanTerakhir',
        'Rating',
        'kategori',
        'spesialis',
        'foto'
    ];

    public function kontrak(){

        return $this->hasOne(Kontrak::class, 'nurse_id', 'id');
    }

    public function kategori(){

        return $this->hasMany(Kategori::class, 'nurse_id', 'id');
    }
}
