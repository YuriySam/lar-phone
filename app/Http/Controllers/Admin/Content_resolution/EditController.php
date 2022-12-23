<?php

namespace App\Http\Controllers\Admin\Content_resolution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Content_resolution;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class EditController extends Controller
{
    public function __invoke(Content_resolution $content_resolution)
    {
        return view('admin.content_resolution.edit', compact('content_resolution'));
    }
}
