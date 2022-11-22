<?php

namespace App\Http\Controllers\Admin\Branch;

use App\Http\Controllers\Controller;
use App\Models\branch;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'branch' => 'string',
            'bransort' => 'integer',


        ]);
        Branch::create($data);
        return redirect()->route('admin.branch.index');
    }

}
