<?php

namespace App\Services\Appeal;

use App\Models\Appeal;



class Service 
{
    public function store($data){

        
        // $tags = $data['tags_id'];
        // unset($data['tags_id']);
        $appeal = Appeal::create($data);
        //$appeal->tags()->attach($tags);

    }

    public function update($appeal, $data){
        ////$categories = Category::All();
        //$tags = $data['tags_id'];
        //unset($data['tags_id']);
        //dd($data);
        $appeal->update($data);
        //$post->tags()->sync($tags);
    }
}
