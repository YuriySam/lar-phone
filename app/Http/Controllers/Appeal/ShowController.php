<?php

namespace App\Http\Controllers\Appeal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Appeal;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class ShowController extends BaseController
{
    public function __invoke(Appeal $appeal)
    {
        //  dd('appeal.ShowController');
        return view('appeal.show', compact('appeal'));
    }
}
