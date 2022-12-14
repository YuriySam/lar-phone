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
    //для відображення сайтбару на Адмінсторінці 
    protected $ssideBar= 'includes.admin.ophone.sidebar';
    //dd($SESSION);
    //use SoftDeletes; //для м'кого видалення 2(2)

    protected $table = 'ophones'; //table to BD
    //protected $guarded = []; //список захищених для заповнення полів БД пустий
    protected $guarded = false; //зняття захисту для заповнення полів БД
    
    //додамо зв'язок з відділом
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }

    //додамо зв'язок з посадою
    public function func()
    {
        return $this->belongsTo(Func::class, 'func_id', 'id');
    }

    //додамо зв'язок з адресою
    public function street()
    {
        return $this->belongsTo(Street::class, 'strid', 'id');
    }

    //знайдемо дні народження за період (допоміжний метод для пошуку ДН на тиждень вперед)
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


//знайдемо дні народження на тиждень вперед
	public function	getBirthday7day(){
        $ophonesBirthdayToday = Ophone::query()
		->birthDayBetween(Carbon::now(), Carbon::now()->addWeek())
		->orderByRaw("DATE_FORMAT(birthday,'%m%d')")
		->orderByRaw("DATE_FORMAT(birthday,'%y') desc")
			->orderBy('surname')
			->get();
           

		return $ophonesBirthdayToday;
	}

    //обрахуємо для кожного запису з Днем народження вік
    public function getOld()
    {
        $old = Carbon::parse($this->birthday)->age;
        return $old;
    }

    //покажемо данні тільки по обраному відділу
    public function scopeOfBranch($query, $branch)
    {
        return $query->where('branch', $branch);
    }



}
