<?php

namespace App\Http\Controllers\Admin\Numerology;

use App\Http\Controllers\Controller;
use App\Models\numerology;

class ShowController extends Controller
{
    public function __invoke(Numerology $numerology)
    {

        return view('admin.numerology.show', compact('numerology'));
    }

    

}
