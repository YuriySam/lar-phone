<?php

namespace App\Http\Controllers\Kmr\Content_resolution;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type_docum\UpdateRequest;
use Illuminate\Http\Request;

use App\Models\Content_resolution;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Content_resolution $content_resolution)
    {
       
        $data = $request->validated();

        $content_resolution->update($data);
        return redirect()->route('kmr.content_resolution.show', $content_resolution->id);
    }
}
