<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question_docum extends Model
{
    use HasFactory;
    use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'question_docums'; //table to BD
    //protected $guarded = []; //список захищених для заповнення полів БД пустий

    protected $guarded = false; //список захищених для заповнення полів БД пустий

    //в одному типі документів багато документів. Знайдемо їх.
    public function appeals()
    {
        return $this->hasMany(Appeal::class, 'question_docum_id', 'id');
    }
}
