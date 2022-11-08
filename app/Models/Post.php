<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'posts'; //table to BD
    //protected $guarded = []; //список захищених для заповнення полів БД пустий
    
    protected $guarded = false;//список захищених для заповнення полів БД пустий
    //protected $fillable = []; //всі поля БД дозволити заповнювати
    //public $sameProperty;//тестова змінна

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');

    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

}
