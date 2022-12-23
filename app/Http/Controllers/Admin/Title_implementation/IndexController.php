<?php

namespace App\Http\Controllers\Admin\Title_implementation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Title_implementation;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class IndexController extends Controller
{
    public function __invoke()
    {

        $title_implementations = Title_implementation::all();
        return view('admin.title_implementation.index', compact('title_implementations'));
    }
}
