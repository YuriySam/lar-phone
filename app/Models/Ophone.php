<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\SoftDeletes;

class Ophone extends Model
{
    use HasFactory;
    use Filterable;
    //use SoftDeletes; //для м'кого видалення 2(2)
    
    //use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'ophones'; //table to BD
    //protected $guarded = []; //список захищених для заповнення полів БД пустий
    protected $guarded = false; //зняття захисту для заповнення полів БД
    

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }
    public function func()
    {
        return $this->belongsTo(Func::class, 'func_id', 'id');
    }
    public function street()
    {
        return $this->belongsTo(Street::class, 'strid', 'id');
    }

    public function scopeBirthDayBetween($query, Carbon $from, Carbon $till)
    {
        $fromMonthDay = $from->format('m-d');
        $tillMonthDay = $till->format('m-d');
        if ($fromMonthDay <= $tillMonthDay) {
            //normal search within the one year
            $query->whereRaw("DATE_FORMAT(birthday, '%m-%d') BETWEEN '{$fromMonthDay}' AND '{$tillMonthDay}'");
        } else {
            //we are overlapping a year, search at end and beginning of year
            $query->where(function ($query) use ($fromMonthDay, $tillMonthDay) {
                $query->whereRaw("DATE_FORMAT(birthday, '%m-%d') BETWEEN '{$fromMonthDay}' AND '12-31'")
                ->orWhereRaw("DATE_FORMAT(birthday, '%m-%d') BETWEEN '01-01' AND '{$tillMonthDay}'");
            });
        }

        
    }
}
