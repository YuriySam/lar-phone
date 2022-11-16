<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class UpdateController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $data = request()->validate([
            'title' => 'string',

        ]);
        //dd($data);
        $tag->update($data);
        return redirect()->route('tag.show', $tag->id);

    }
}
