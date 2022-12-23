<?php

namespace App\Http\Controllers\Admin\Title_implementation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type_docum\UpdateRequest;
use Illuminate\Http\Request;

use App\Models\Title_implementation;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Title_implementation $title_implementation)
    {
       
        $data = $request->validated();

        $title_implementation->update($data);
        return redirect()->route('admin.title_implementation.show', $title_implementation->id);
    }
}
