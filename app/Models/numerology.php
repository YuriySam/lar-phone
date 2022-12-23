<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Numerology extends Model
{
    use HasFactory;

    use SoftDeletes; //для м'кого видалення 2(2)

    protected $dateCalculate;//дата для розрахунку передбачення

    protected $table = 'numerologies'; //table to BD
    //protected $guarded = []; //список захищених для заповнення полів БД пустий
    protected $guarded = false; //зняття захисту для заповнення полів БД

    
   
}
