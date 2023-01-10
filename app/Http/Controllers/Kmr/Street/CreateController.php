<?php

namespace App\Http\Controllers\Kmr\Street;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Street;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('kmr.street.create');
    }


    
}
