<?php

namespace App\Http\Controllers\Appeal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Appeal\StoreRequest;

use App\Models\Appeal;
use App\Models\Post;

use App\Models\Tag;
use App\Models\PostTag;

class StoreController extends BaseController
{
     public function __invoke(StoreRequest $request)
    {
        // dd('99-99 appeal.StoreController StoreRequest', $request);
         $data = $request->validated();
      //dd('appeal.StoreController', $data);
        

        $this->service->store($data);

        
        /*
        foreach ($tags as $tag_id){
            PostTag::firstOrCreate([
                'tag_id' => $tag_id,
                'post_id' => $post->id,
            ]);

        }
        */
// dd('StoreController service');
        return redirect()->route('appeal.index');
    }

    
}
