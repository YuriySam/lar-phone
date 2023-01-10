<?php

namespace App\Http\Controllers\Kmr\Amount_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Type_docum\StoreRequest;

use App\Models\Amount_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        
        $data = $request->validated();
        Amount_docum::create($data);
        return redirect()->route('kmr.amount_docum.index');
    }
}
