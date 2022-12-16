<?php

namespace App\Http\Controllers\Appeal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Appeal;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class EditController extends BaseController
{
    public function __invoke(Appeal $appeal)
    {
          dd('appeal.EditController');
        $categories = Category::All();
        $tags = Tag::All();
        return view('post.edit', compact('post', 'categories', 'tags'));

    }
}
