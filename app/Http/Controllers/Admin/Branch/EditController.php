<?php

namespace App\Http\Controllers\Admin\Branch;

use App\Http\Controllers\Controller;
use App\Models\branch;

class EditController extends Controller
{
    public function __invoke(branch $branch)
    {

        return view('admin.branch.edit', compact('branch'));
    }


    
}
