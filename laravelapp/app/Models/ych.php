<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ych extends Model
{
    use HasFactory;
    public function ychModel(){
        return ych::table('yches')->select('*')->get();
    }
}
