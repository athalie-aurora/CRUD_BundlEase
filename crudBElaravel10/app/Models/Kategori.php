<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public function kategori(){
        return $this->belongsTo(Nurse::class, 'nurse_id' , 'id');
    }
}
