<?php

namespace App\Http\Controllers\Admin\Numerology;

use App\Http\Controllers\Controller;
use App\Models\numerology;

class CreateController extends Controller
{
    public function    __invoke()
    {
        return view('admin.numerology.create');
    }

}
