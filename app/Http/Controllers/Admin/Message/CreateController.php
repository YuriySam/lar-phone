<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;


class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.message.create');
        
    }

	
    
}
