<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Title_implementation extends Model
{
    use HasFactory;


    use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'title_implementations'; //table to BD Результат розгляду (title_implementation_id)
    //protected $guarded = []; //список захищених для заповнення полів БД пустий

    protected $guarded = false; //список захищених для заповнення полів БД пустий

    //в одному типі документів багато документів. Знайдемо їх.
    public function appeals()
    {
        return $this->hasMany(Appeat::class, 'title_implementation_id', 'id');
    }

}
