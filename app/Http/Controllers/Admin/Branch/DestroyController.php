<?php

namespace App\Http\Controllers\Admin\Branch;

use App\Http\Controllers\Controller;
use App\Models\branch;

class DestroyController extends Controller
{
    public function    __invoke(Branch $branch)
    {
        $branch->delete();

        return redirect()->route('admin.branch.index');
    }
    

    
}
