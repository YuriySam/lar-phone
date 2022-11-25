<?php

namespace App\Http\Controllers\Admin\Numerology;

use App\Http\Controllers\Controller;
use App\Models\numerology;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'number' => 'integer',
            'content' => 'string',


        ]);
        Numerology::create($data);
        return redirect()->route('admin.numerology.index');
    }

}
