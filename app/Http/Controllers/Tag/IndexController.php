<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));

    }
}
