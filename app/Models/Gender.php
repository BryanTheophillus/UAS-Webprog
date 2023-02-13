<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    public function Account(){
        return $this->hasMany(Account::class);
    }
}
// {{-- Bryan Theophillus - 2401953966 --}}
