<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Ophone extends Model
{
    use HasFactory;
    use Filterable;
    //use SoftDeletes; //для м'кого видалення 2(2)
    
    //use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'ophones'; //table to BD
    protected $guarded = []; //список захищених для заповнення полів БД пустий
    //protected $guarded = false; //зняття захисту для заповнення полів БД
    

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }
    public function func()
    {
        return $this->belongsTo(Func::class, 'func_id', 'id');
    }
}
