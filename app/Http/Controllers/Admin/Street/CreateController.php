<?php

namespace App\Http\Controllers\Admin\Street;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\street;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.street.create');
    }


    
}
