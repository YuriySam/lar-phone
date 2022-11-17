<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request -> validated();

        $filter = app()->make(PostFilter::class, ['queryParams => array_filter($data)']);

        dd($data);

        $post = Post::where('is published',1)->get();
        //$posts = Post::all();
        $posts = Post::paginate(7);
        return view('post.index', compact('posts'));
    }
}
