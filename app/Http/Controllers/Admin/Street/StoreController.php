<?php

namespace App\Http\Controllers\Admin\Street;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Street\StoreRequest;

use App\Models\Street;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {


        $data = $request->validated();
        Street::create($data);
        return redirect()->route('admin.street.index');
    }

    
}
