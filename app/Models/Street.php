<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Street extends Model
{
    use HasFactory;
    use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'streets'; //table to BD
    //protected $guarded = []; //список захищених для заповнення полів БД пустий

    protected $guarded = false; //список захищених для заповнення полів БД пустий
    //protected $fillable = []; //всі поля БД дозволити заповнювати
    //public $sameProperty;//тестова змінна

    //в одної вулиці багато ophone. Знайдемо їх.
    public function ophones()
    {
        return $this->hasMany(Ophone::class, 'strid', 'id');
    }

}
