<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function Account(){
        return $this->belongsTo(Account::class);
    }

    public function Item(){
        return $this->belongsTo(Item::class);
    }
}
// {{-- Bryan Theophillus - 2401953966 --}}
