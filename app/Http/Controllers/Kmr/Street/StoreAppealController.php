<?php

namespace App\Http\Controllers\Kmr\Street;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Street\StoreRequest;

use App\Models\Street;

//додаємо вулицю в формі створення нового запису Appeal
class StoreAppealController extends Controller
{
    public function __invoke(StoreRequest $request)
    {


        $data = $request->validated();
        Street::create($data);
        return redirect()->route('kmr.appeal.create');
    }

    
}
