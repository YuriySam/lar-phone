<?php

namespace App\Http\Controllers\Admin\Type_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Type_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class ShowController extends Controller
{
    public function __invoke(Type_docum $type_docum)
    {
        return view('admin.type_docum.show', compact('type_docum'));
    }
}
