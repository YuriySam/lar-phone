<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $tags = Tag::All();
        $categories = Category::All();
        return view('admin.post.create', compact('categories', 'tags'));
    }
}
