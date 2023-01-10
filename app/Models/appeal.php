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
        return $this->belongsTo(Question_docum::class, 'question_docum_id', 'id');
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
    // Первинне/повторне/дубль (amount_docum_id)
    public function amount_docum()
    {
        return $this->belongsTo(Amount_docum::class, 'amount_docum_id', 'id');
    }

    //Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution_id)
    public function content_resolution()
    {
        return $this->belongsTo(Content_resolution::class,'content_resolution_id','id');
    }

    

    //Виконавець (executor_ophone_id)
    public function executor_ophone()
    {
        return $this->belongsTo(Ophone::class, 'executor_ophone_id', 'id');
    }

     //Структурний підрозділ (executor_branch_id)
     public function executor_branch()
     {
         return $this->belongsTo(Branch::class, 'executor_branch_id', 'id');
     }

    //Результат розгляду (title_implementation_id)
    public function title_implementation()
    {
        return $this->belongsTo(Title_implementation::class, 'title_implementation_id', 'id');
    }

    //Результат розгляду (validity_id)
    public function validity()
    {
        return $this->belongsTo(Validity::class, 'validity_id', 'id');
    }

    
}
