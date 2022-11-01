<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ophone extends Model
{
    use HasFactory;
    
    //use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'ophones'; //table to BD
    protected $guarded = []; //список захищених для заповнення полів БД пустий
}
