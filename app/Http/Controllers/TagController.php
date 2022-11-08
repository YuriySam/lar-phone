<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        //$post = Post::find(1);
        //$str = 'string';
        //var_dump($str);
        /*
        echo $post->content;
        echo "<BR> likes= " . $post->likes;
        echo "<BR>";
        */


        $tags = Tag::all();
        
        
        
        /*
        foreach ($posts as $post) {
            dump('forich= ' . $post->title);
        }

        $posts_new = Post::where('is_published', 1)->get();
        $posts_new1 = Post::where('is_published', 0)->first();
        dump('posts_new1= ' . $posts_new1->title);

        */
        //echo 'posts_new';
        //dd($posts);
        //   return view('post', compact('posts'));
        return view('tag.index', compact('tags'));
    }



    public function create()
    {
        return view('tag.create');
    }


    
    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            
        ]);
        Tag::create($data);
        return redirect()->route('tag.index');
    }

    public function show(Tag $tag){
        
        return view('tag.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {
        
        return view('tag.edit', compact('tag'));
    }


    public function update(Tag $tag)
    {
        
        $data = request()->validate([
            'title' => 'string',
           
        ]);
        //dd($data);
        $tag->update($data);
        return redirect()->route('tag.show', $tag->id);
    }

    public function delete()
    {
        $tag = Tag::find(5);
        dd('delete psge' . $tag->id);

        $tag->delete();

        dd('delete psge' . $tag->id);
    }

    
    public function undelete()
    {
        $tag = Tag::withTrashed()->find(5);
        $tag->restore();

        dd('undelete psge  ' . $tag->id);
    }


    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tag.index');
    }
    
   
   
   
    public function firstOrCreate()
    {
        //$post = Post::find(1);
        $anotherPost = [
            'title' => 'title of post from vscode',
            'content' => 'some interesting content',
            'image' => 'imaget1.jpg',
            'likes' => '15',
            'is_published' => '1'

        ];
        $category = Tag::firstOrCreate(
            [
                'title' => '22title of category from vscode',
            ],
            [

                'title' => '22title of post from vscode',
                'content' => 'some interesting content',
                'image' => 'imaget1.jpg',
                'likes' => '150',
                'is_published' => '1'

            ]

        );


        dd('firstOrCreate records id= ' . $tag->id);
    }

    //updateOrCreate - С‡Рё РѕРЅРѕРІР»РµРЅРЅСЏ С‡Рё СЃС‚РІРѕСЂРµРЅРЅСЏ Р·Р° Р·Р°РґР°РЅРёРјРё Р°С‚СЂРёР±СѓС‚Р°РјРё



    public function updateOrCreate()
    {
        //dd('updateOrCreate');

        $tag = Tag::updateOrCreate(
            [
                'title' => 'updateOrCreate 22title of post from vscode',
            ],
            [

                'title' => 'updateOrCreate 22title of post from vscode',
                'content' => 'updateOrCreate some interesting content',
                'image' => 'imaget1.jpg',
                'likes' => '150',
                'is_published' => '1'

            ]

        );


        dd('updateOrCreate records id= ' . $tag->id);
    }
}
