<?php

namespace App\Http\Controllers\Appeal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Appeal\UpdateRequest;
use Illuminate\Http\Request;

use App\Models\Appeal;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Appeal $appeal)
    {
        //   dd('appeal.UpdateController');
        $data = $request->validated();

        $this->service->update($appeal, $data);
        
        // return redirect()->route('appeal.show', $appeal->id);
        return redirect()->route('appeal.index');        
    }
}
