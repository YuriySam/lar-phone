<?php

namespace App\Http\Controllers\Kmr\Amount_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Amount_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class DestroyController extends Controller
{
    public function __invoke(Amount_docum $amount_docum)
    {
        $amount_docum->delete();

        return redirect()->route('kmr.amount_docum.index');
    }
}
