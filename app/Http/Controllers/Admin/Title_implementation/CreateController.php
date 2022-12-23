<?php

namespace App\Http\Controllers\Admin\Title_implementation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Type_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.title_implementation.create');
    }
}
