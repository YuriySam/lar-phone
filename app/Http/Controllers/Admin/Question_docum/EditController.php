<?php

namespace App\Http\Controllers\Admin\Question_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Question_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class EditController extends Controller
{
    public function __invoke(Question_docum $question_docum)
    {
        return view('admin.question_docum.edit', compact('question_docum'));
    }
}
