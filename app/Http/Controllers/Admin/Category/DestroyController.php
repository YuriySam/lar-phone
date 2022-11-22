<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class DestroyController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index');
    }
}
