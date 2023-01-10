<?php

namespace App\Http\Controllers\Kmr\Type_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Type_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class EditController extends Controller
{
    public function __invoke(Type_docum $type_docum)
    {
        return view('kmr.type_docum.edit', compact('type_docum'));
    }
}
