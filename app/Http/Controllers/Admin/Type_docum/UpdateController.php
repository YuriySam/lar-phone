<?php

namespace App\Http\Controllers\Admin\Type_docum;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type_docum\UpdateRequest;
use Illuminate\Http\Request;

use App\Models\Type_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Type_docum $type_docum)
    {
       
        $data = $request->validated();
        
        $type_docum->update($data);
        return redirect()->route('admin.type_docum.show', $type_docum->id);
    }
}
