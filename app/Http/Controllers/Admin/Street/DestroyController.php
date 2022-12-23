<?php

namespace App\Http\Controllers\Admin\Street;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\street;

class DestroyController extends Controller
{
   
    public function __invoke(Street $street)
    {
        $street->delete();

        return redirect()->route('admin.street.index');
    }
    
   
   
    
}
