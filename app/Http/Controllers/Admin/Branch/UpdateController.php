<?php

namespace App\Http\Controllers\Admin\Branch;

use App\Http\Controllers\Controller;
use App\Models\branch;

class UpdateController extends Controller
{
    public function __invoke(Branch $branch)
    {

        $data = request()->validate([
            'branch' => 'string',
            'bransort' => 'integer',
        ]);
        //dd($data);
        $branch->update($data);
        return redirect()->route('admin.branch.show', $branch->id);
    }

    
}
