<?php

namespace App\Http\Controllers\Admin\Validity;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type_docum\UpdateRequest;
use Illuminate\Http\Request;

use App\Models\Validity;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Validity $validity)
    {
       
        $data = $request->validated();

        $validity->update($data);
        return redirect()->route('admin.validity.show', $validity->id);
    }
}
