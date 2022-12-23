<?php

namespace App\Http\Controllers\Admin\Type_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Type_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class IndexController extends Controller
{
    public function __invoke()
    {
        
        $type_docums = Type_docum::all();
        return view('admin.type_docum.index', compact('type_docums'));
    }
}
