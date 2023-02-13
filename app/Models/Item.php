<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function Order(){
        return $this->hasMany(Cart::class);
    }
}
// {{-- Bryan Theophillus - 2401953966 --}}
