<?php

namespace App\Http\Controllers\Admin\Amount_docum;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type_docum\UpdateRequest;
use Illuminate\Http\Request;

use App\Models\Amount_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Amount_docum $amount_docum)
    {
       
        $data = $request->validated();

        $amount_docum->update($data);
        return redirect()->route('admin.amount_docum.show', $amount_docum->id);
    }
}
