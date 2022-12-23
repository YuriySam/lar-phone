<?php

namespace App\Http\Controllers\Admin\Title_implementation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Type_docum\StoreRequest;

use App\Models\Title_implementation;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        
        $data = $request->validated();
        Title_implementation::create($data);
        return redirect()->route('admin.title_implementation.index');
    }
}
