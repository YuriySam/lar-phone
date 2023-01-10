<?php

namespace App\Http\Controllers\Kmr\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CreateController extends Controller
{
    public function __invoke()
    {
        return view('kmr.office.create');
    }
}
