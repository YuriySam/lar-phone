<?php

namespace App\Http\Controllers\Kmr\Street;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Street;

class EditController extends Controller
{
    public function  __invoke(Street $street)
    {

        return view('kmr.street.edit', compact('street'));
    }
    
}
