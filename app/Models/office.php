<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class office extends Model
{
    use HasFactory;//за замовчанням

    protected $table = 'offices'; //table to BD
    //protected $guarded = []; //список захищених для заповнення полів БД пустий
    protected $guarded = false; //зняття захисту для заповнення полів БД
    
}
