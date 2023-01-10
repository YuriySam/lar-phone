<?php

namespace App\Http\Controllers\Kmr\Question_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Question_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class ShowController extends Controller
{
    public function __invoke(Question_docum $question_docum)
    {
        return view('kmr.question_docum.show', compact('question_docum'));
    }
}
