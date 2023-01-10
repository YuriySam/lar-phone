<?php

namespace App\Http\Controllers\Kmr\Street;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Street;

class CreateAppealController extends Controller
{
    public function __invoke()
    {
        // dd('Street.Create_AppealController');
        return view('kmr.street.createAppeal');
    }


    
}
