<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Validity extends Model
{
    use HasFactory;
    //Обгрунтованість (validity_id)


    use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'validities'; //table to BD
    //protected $guarded = []; //список захищених для заповнення полів БД пустий

    protected $guarded = false; //список захищених для заповнення полів БД пустий

    //в одному типі документів багато документів. Знайдемо їх.
    public function appeals()
    {
        return $this->hasMany(Appeat::class, 'validity_id', 'id');
    }

}
