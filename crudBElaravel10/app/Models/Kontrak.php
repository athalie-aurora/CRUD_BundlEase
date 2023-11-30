<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak extends Model
{
    use HasFactory;

    public function kontrak(){
        return $this->belongsTo(Nurse::class, 'nurse_id' , 'id');
    }

    
}
