<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Appeal extends Model
{
    use HasFactory;
    // use HasFactory;
    // use Filterable;
    use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'appeals'; //table to BD
    //protected $guarded = []; //список захищених для заповнення полів БД пустий
    
    protected $guarded = false; //список захищених для заповнення полів БД пустий
    //protected $fillable = []; //всі поля БД дозволити заповнювати
    //public $sameProperty;//тестова змінна

    // public function category(){
    //     return $this->belongsTo(Category::class, 'category_id', 'id');

    // }
    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    // }


    //додамо зв'язок з адресою
    public function street()
    {
        return $this->belongsTo(Street::class, 'street_id', 'id');
    }

    //додамо зв'язок з Вид документа скарга/подяка/запит/пропозиція
    public function type_docum()
    {
        return $this->belongsTo(Type_docum::class, 'type_docum_id', 'id');
    }
    //додамо зв'язок з Порушені питання тип
    public function question_docum()
    {
        return $this->belongsTo(Question_docum::class, 'question_docums_id', 'id');
    }
    //додамо зв'язок з Куди надійшло звернення... (destination_office_id)
    public function destination_office()
    {
        return $this->belongsTo(Office::class, 'destination_office_id', 'id');
    }
    
    //додамо зв'язок з Звідки одержано (1) (source1_office_id)
    public function source1_office()
    {
        return $this->belongsTo(Office::class, 'source1_office_id', 'id');
    }
    //додамо зв'язок з Звідки одержано (1) (source2_office_id)
    public function source2_office()
    {
        return $this->belongsTo(Office::class, 'source2_office_id', 'id');
    }
    // Первинне/повторне/дубль (amount_dokum_id)

}
