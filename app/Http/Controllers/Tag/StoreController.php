<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\StoreRequest;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Tag::create($data);
        return redirect()->route('tag.index');

    }
}
