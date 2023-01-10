<?php

namespace App\Http\Controllers\Kmr\Type_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Type_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class DestroyController extends Controller
{
    public function __invoke(Type_docum $type_docum)
    {
        $type_docum->delete();

        return redirect()->route('kmr.type_docum.index');
    }
}
