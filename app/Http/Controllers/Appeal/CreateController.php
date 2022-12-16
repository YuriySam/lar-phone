<?php

namespace App\Http\Controllers\Appeal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Appeal;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        //  dd('appeal.CreateController');
        //$tags = Tag::All();
        //$categories = Category::All();
        //return view('appeal.create', compact('categories', 'tags'));
        $appeals = Appeal::all();
        return view('appeal.create', compact('appeals'));
    }
}
