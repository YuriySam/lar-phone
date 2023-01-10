<?php

namespace App\Http\Controllers\Kmr\Street;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Street\UpdateRequest;

use App\Models\Street;

class UpdateController extends Controller
{
   
    public function __invoke(UpdateRequest $request, Street $street)
    {

        $data = $request->validated();
        //dd($data);
        $street->update($data);
        return redirect()->route('kmr.street.show', $street->id);
    }

    
}
