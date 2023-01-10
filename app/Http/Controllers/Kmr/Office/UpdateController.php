<?php

namespace App\Http\Controllers\Kmr\Office;

use App\Http\Controllers\Controller;
use App\Http\Requests\Office\UpdateRequest;
use Illuminate\Http\Request;

use App\Models\Office;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Office $office)
    {
        $data = $request->validated();
        //dd($data);
        $office->update($data);
        return redirect()->route('kmr.office.show', $office->id);
    }
}
