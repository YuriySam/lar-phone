<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
    protected $table = 'posttags'; //table to BD
    //protected $guarded = []; //список захищених для заповнення полів БД пустий

    protected $guarded = false;//список захищених для заповнення полів БД пустий
}
