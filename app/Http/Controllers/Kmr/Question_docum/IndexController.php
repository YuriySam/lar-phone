<?php

namespace App\Http\Controllers\Kmr\Question_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Question_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class IndexController extends Controller
{
    public function __invoke()
    {

        $question_docums = Question_docum::all();
        return view('kmr.question_docum.index', compact('question_docums'));
    }
}
