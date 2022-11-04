<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends Model
{
    use HasFactory;

    use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'quotes'; //table to BD
    protected $guarded = []; //список захищених для заповнення полів БД пустий
}
