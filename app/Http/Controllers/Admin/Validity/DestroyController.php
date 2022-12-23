<?php

namespace App\Http\Controllers\Admin\Validity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Validity;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class DestroyController extends Controller
{
    public function __invoke(Validity $validity)
    {
        $validity->delete();

        return redirect()->route('admin.validity.index');
    }
}
