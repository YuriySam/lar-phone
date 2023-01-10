<?php

namespace App\Http\Controllers\Kmr\Title_implementation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Title_implementation;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class EditController extends Controller
{
    public function __invoke(Title_implementation $title_implementation)
    {
        return view('kmr.title_implementation.edit', compact('title_implementation'));
    }
}
