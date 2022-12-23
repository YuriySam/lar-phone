<?php

namespace App\Http\Controllers\Admin\Question_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Type_docum\StoreRequest;

use App\Models\Question_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        
        $data = $request->validated();
        Question_docum::create($data);
        return redirect()->route('admin.question_docum.index');
    }
}
