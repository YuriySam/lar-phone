<?php

namespace App\Http\Controllers\Kmr\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Office;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class DestroyController extends Controller
{
    public function __invoke(Office $office)
    {
        $office->delete();

        return redirect()->route('kmr.office.index');
    }
}
