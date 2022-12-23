<?php

namespace App\Http\Controllers\Admin\Validity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Validity;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class ShowController extends Controller
{
    public function __invoke(Validity $validity)
    {
        return view('admin.validity.show', compact('validity'));
    }
}
