<?php

namespace App\Http\Controllers\Admin\Branch;

use App\Http\Controllers\Controller;
use App\Models\branch;

class ShowController extends Controller
{
    public function __invoke(Branch $branch)
    {

        return view('admin.branch.show', compact('branch'));
    }

    

}
