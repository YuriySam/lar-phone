<?php

namespace App\Http\Controllers\Admin\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Office;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class EditController extends Controller
{
    public function __invoke(Office $office)
    {
        return view('admin.office.edit', compact('office'));
    }
}
