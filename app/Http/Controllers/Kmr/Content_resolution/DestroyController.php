<?php

namespace App\Http\Controllers\Kmr\Content_resolution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Content_resolution;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class DestroyController extends Controller
{
    public function __invoke(Content_resolution $content_resolution)
    {
        $content_resolution->delete();

        return redirect()->route('kmr.content_resolution.index');
    }
}
