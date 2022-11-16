<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;

use App\Models\Ophone;
use App\Models\Post;

use App\Models\Tag;
use App\Models\PostTag;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();

        $this->service->store($data);

        
        /*
        foreach ($tags as $tag_id){
            PostTag::firstOrCreate([
                'tag_id' => $tag_id,
                'post_id' => $post->id,
            ]);

        }
        */

        return redirect()->route('post.index');
    }

    
}
