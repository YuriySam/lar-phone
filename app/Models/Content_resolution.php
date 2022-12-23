<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content_resolution extends Model
{
    use HasFactory;

    use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'content_resolutions'; //table to BD
    //protected $guarded = []; //список захищених для заповнення полів БД пустий

    protected $guarded = false; //список захищених для заповнення полів БД пустий

    //в одному типі документів багато документів. Знайдемо їх.
    public function appeals()
    {
        return $this->hasMany(Appeat::class, 'content_resolution_id', 'id');
    }

}
