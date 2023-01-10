<?php

namespace App\Http\Controllers\Kmr\Content_resolution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Type_docum\StoreRequest;

use App\Models\Content_resolution;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        
        $data = $request->validated();
        Content_resolution::create($data);
        return redirect()->route('kmr.content_resolution.index');
    }
}
