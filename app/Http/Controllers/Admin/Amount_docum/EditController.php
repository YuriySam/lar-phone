<?php

namespace App\Http\Controllers\Admin\Amount_docum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Amount_docum;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class EditController extends Controller
{
    public function __invoke(Amount_docum $amount_docum)
    {
        return view('admin.amount_docum.edit', compact('amount_docum'));
    }
}
