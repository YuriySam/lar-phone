<?php

namespace App\Http\Controllers\Admin\Street;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Street;

class CreateEditController extends Controller
{
    public function  __invoke(Street $street)
    {

        return view('admin.street.createEdit', compact('street'));
    }
    
}
