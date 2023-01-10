<?php

namespace App\Http\Controllers\Kmr\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Office\StoreRequest;

use App\Models\Office;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Office::create($data);
        return redirect()->route('kmr.office.index');
    }
}
