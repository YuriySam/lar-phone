<?php

namespace App\Http\Controllers\Admin\Numerology;

use App\Http\Controllers\Controller;
use App\Models\numerology;

class CalculateSetController extends Controller
{
    public function __invoke()
    {
        
        $data = request()->validate([
            'dataBirthday' => 'date',
            


        ]);
        //$date = strtotime("2013-10-20 10:32:12");
        //$data = strtotime($data);
        //$day = $data->dataBirthday("d", $data->dataBirthday);
        
        //отримаємо данні
        $dataTemp=$data['dataBirthday'];
        //перетворимо на дату
        $datadata = date_create($dataTemp);
        //отримаємо день
        echo date_format($datadata, 'd');

        //calculate first property - day
        $dayNumber    = (int)date_format($datadata, 'd');
        //        echo "<BR>"."dayNumber= ".$dayNumber ."<BR>";
        if($dayNumber>21){
            $dayNumber= $this->on21($dayNumber);
            //echo "<BR>"."<BR>"." NEW dayNumber = ".$dayNumber ."<BR>";
        }
        

         //calculate first property - month
        $monthNumber = (int)date_format($datadata, 'm');
        //echo "<BR>"."monthNumber= ".$monthNumber ."<BR>";
        


        //calculate first property - year
        $yearNumber = (int)date_format($datadata, 'Y');
        //echo "<BR>"."yearNumber= ".$yearNumber ."<BR>";
        if($yearNumber>21){
            $yearNumber= $this->on21($yearNumber);
            //echo "<BR>"."<BR>"." NEW yearNumber = ".$yearNumber ."<BR>";
        }
        
        





//dd( "CalculateSetController");
        return view('admin.numerology.calculate', compact('datadata', 'dayNumber', 'monthNumber', 'yearNumber'));
    }

    //розрахуємо число для пошуку пророцтва - від 1 до 21 включно
    private function on21(int $number){
        $intNumber = (int)$number;
       while ($intNumber >21){
            //розберемо строку на символи та складемо їх
            $strNumber=(string)$intNumber;
            $i= strlen($strNumber); 
            
            ////розібїємо строку на массив символів
            $str_arr = array();
            for ($i=0;$i<=strlen($strNumber)-1;$i++) {
                array_push($str_arr, $strNumber[$i]);
            }
            //складемо всі елементи масиву один з одним
            $newNumber=0;
            foreach($str_arr as $item){
                $newNumber= $newNumber+$item;
            }
            //echo"<BR>"."new Number= ".$newNumber."  intNumber= ".$intNumber."  next iteracion"."<BR>";
            
            $intNumber=(int)$newNumber;
            //var_dump($str_arr);

        }

        return $newNumber;
    }

}
