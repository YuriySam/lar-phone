<?php

namespace App\Http\Controllers\Admin\Func;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\func;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'func' => 'string',
            'funindex' => 'integer',
        ]);
        Func::create($data);
        return redirect()->route('admin.func.index');
    }

    
}
