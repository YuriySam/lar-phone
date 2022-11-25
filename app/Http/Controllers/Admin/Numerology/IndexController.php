<?php

namespace App\Http\Controllers\Admin\Numerology;

use App\Http\Controllers\Controller;
use App\Models\numerology;

class IndexController extends Controller
{
    public function __invoke()
    {
        $numerologis = Numerology::all();
        
        return view('admin.numerology.index', compact('numerologis'));
    }
}
