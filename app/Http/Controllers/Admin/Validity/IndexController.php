<?php

namespace App\Http\Controllers\Admin\Validity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Validity;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class IndexController extends Controller
{
    public function __invoke()
    {

        $validities = Validity::all();
        return view('admin.validity.index', compact('validities'));
    }
}
