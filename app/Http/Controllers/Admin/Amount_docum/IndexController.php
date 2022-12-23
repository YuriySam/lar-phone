<?php

namespace App\Http\Controllers\Admin\Amount_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Amount_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class IndexController extends Controller
{
    public function __invoke()
    {

        $amount_docums = Amount_docum::all();
        return view('admin.amount_docum.index', compact('amount_docums'));
    }
}
