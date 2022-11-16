<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class DestroyController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tag.index');
        
    }
}
