<?php

namespace App\Http\Controllers\Admin\Title_implementation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Title_implementation;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class ShowController extends Controller
{
    public function __invoke(Title_implementation $title_implementation)
    {
        return view('admin.title_implementation.show', compact('title_implementation'));
    }
}
