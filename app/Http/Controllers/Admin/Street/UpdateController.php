<?php

namespace App\Http\Controllers\Admin\Street;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Street\UpdateRequest;

use App\Models\street;

class UpdateController extends Controller
{
   
    public function __invoke(UpdateRequest $request, Street $street)
    {

        $data = $request->validated();
        //dd($data);
        $street->update($data);
        return redirect()->route('admin.street.show', $street->id);
    }

    
}
