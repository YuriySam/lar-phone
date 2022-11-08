<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;

    use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'tags'; //table to BD
    //protected $guarded = []; //список захищених для заповнення полів БД пустий

    protected $guarded = false; //список захищених для заповнення полів БД пустий
    //protected $fillable = []; //всі поля БД дозволити заповнювати
    //public $sameProperty;//тестова змінна

    //в багатьох категоріях багато постів. Знайдемо їх.
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tags', 'tag_id', 'post_id');
    }
}
