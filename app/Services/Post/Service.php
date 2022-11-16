<?php

namespace App\Services\Post;

use App\Models\Post;



class Service 
{
    public function store($data){

        
        $tags = $data['tags_id'];
        unset($data['tags_id']);
        $post = Post::create($data);

        $post->tags()->attach($tags);

    }

    public function update($post, $data){
        //$categories = Category::All();
        $tags = $data['tags_id'];
        unset($data['tags_id']);
        //dd($data);
        $post->update($data);
        $post->tags()->sync($tags);
    }
}
