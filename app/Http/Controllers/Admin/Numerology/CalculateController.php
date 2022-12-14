<?php

namespace App\Http\Controllers\Admin\Numerology;

use App\Http\Controllers\Controller;
use App\Models\numerology;

class CalculateController extends Controller
{
    public function    __invoke()
    {
       

        
        return view('admin.numerology.calculate');
    }

}
