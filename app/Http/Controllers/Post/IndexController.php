<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class IndexController extends BaseController
{
    public function __invoke()
    {
        //$posts = Post::all();
        $posts = Post::paginate(7);
        return view('post.index', compact('posts'));
    }
}
