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

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }
    public function func()
    {
        return $this->belongsTo(Func::class, 'func_id', 'id');
    }
}
