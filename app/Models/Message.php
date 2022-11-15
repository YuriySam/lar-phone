<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;

    protected $table = 'messages'; //table to BD
    protected $guarded = false;//список захищених для заповнення полів БД пустий
    
}
