<?php

namespace App\Http\Controllers\Admin\Numerology;

use App\Http\Controllers\Controller;
use App\Models\numerology;

class DestroyController extends Controller
{
    public function    __invoke(Numerology $numerology)
    {
        $numerology->delete();

        return redirect()->route('admin.numerology.index');
    }
    

    
}
