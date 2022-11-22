<?php

namespace App\Http\Controllers\Admin\Branch;

use App\Http\Controllers\Controller;
use App\Models\branch;

class IndexController extends Controller
{
    public function __invoke()
    {
        $branchs = Branch::all();
        
        return view('admin.branch.index', compact('branchs'));
    }
}
