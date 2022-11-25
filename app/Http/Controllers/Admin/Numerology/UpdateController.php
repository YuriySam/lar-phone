<?php

namespace App\Http\Controllers\Admin\Numerology;

use App\Http\Controllers\Controller;
use App\Models\numerology;

class UpdateController extends Controller
{
    public function __invoke(Numerology $numerology)
    {

        $data = request()->validate([
            'number' => 'integer',
            'content' => 'string',
        ]);
        //dd($data);
        $numerology->update($data);
        return redirect()->route('admin.numerology.show', $numerology->id);
    }

    
}
