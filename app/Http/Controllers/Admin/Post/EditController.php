<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categories = Category::All();
        $tags = Tag::All();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));

    }
}
