<?php

namespace App\Http\Controllers\Kmr\Appeal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Appeal;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class UpdateController extends BaseController
{
    public function __invoke(Appeal $appeal)
    {
          dd('appeal.UpdateController');

        $data = request()->validate([
            'number' => 'string',
            'number1' => 'string',
            'surname' => 'string',
            'name' => 'string',
            'patronymic' => 'string',
            'funid' => 'integer',
            'branid' => 'integer',
            'offid' => 'integer'
        ]);
        //dd($data);
        $appeal->update($data);
        return redirect()->route('kmr.ophone.show', $appeal->id);


    }
}
