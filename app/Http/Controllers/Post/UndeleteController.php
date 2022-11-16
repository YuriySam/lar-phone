<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ophone;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class UpdateController extends BaseController
{
    public function __invoke(Ophone $ophone)
    {

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
        $ophone->update($data);
        return redirect()->route('ophone.show', $ophone->id);


    }
}
