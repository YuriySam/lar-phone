<?php

namespace App\Http\Controllers\Kmr\Amount_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Amount_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class ShowController extends Controller
{
    public function __invoke(Amount_docum $amount_docum)
    {
        return view('kmr.amount_docum.show', compact('amount_docum'));
    }
}
