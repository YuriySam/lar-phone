<?php

namespace App\Http\Controllers\Kmr\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Office;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $offices = Office::all();
        return view('kmr.office.index', compact('offices'));
    }
}
