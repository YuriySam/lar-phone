<?php

namespace App\Http\Controllers\Admin\Branch;

use App\Http\Controllers\Controller;
use App\Models\branch;

class CreateController extends Controller
{
    public function    __invoke()
    {
        return view('admin.branch.create');
    }

}
