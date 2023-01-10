<?php

namespace App\Http\Controllers\Kmr\Question_docum;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type_docum\UpdateRequest;
use Illuminate\Http\Request;

use App\Models\Question_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Question_docum $question_docum)
    {
       
        $data = $request->validated();

        $question_docum->update($data);
        return redirect()->route('kmr.question_docum.show', $question_docum->id);
    }
}
