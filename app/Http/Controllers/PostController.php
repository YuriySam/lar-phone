<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
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


        //$posts = Post::all();
        $categories = Category::all();
        $category = Category::find(1);
        $post = Post::find(1);

        //$posts = Post::where('category_id', $category->id)->get();

        //dd($category->posts);
        dd($post->category);
        
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
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer',
            'is_published' => 'integer',
            
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post){
        
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        
        return view('post.edit', compact('post'));
    }


    public function update(Post $post)
    {
        
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer',
            'is_published' => 'integer',

        ]);
        //dd($data);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function delete()
    {
        $post = Post::find(5);
        $post->delete();

        dd('delete psge' . $post->id);
    }

    
    public function undelete()
    {
        $post = Post::withTrashed()->find(5);
        $post->restore();

        dd('undelete psge  ' . $post->id);
    }


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
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
        $post = Post::firstOrCreate(
            [
                'title' => '22title of post from vscode',
            ],
            [

                'title' => '22title of post from vscode',
                'content' => 'some interesting content',
                'image' => 'imaget1.jpg',
                'likes' => '150',
                'is_published' => '1'

            ]

        );


        dd('firstOrCreate records id= ' . $post->id);
    }

    //updateOrCreate - С‡Рё РѕРЅРѕРІР»РµРЅРЅСЏ С‡Рё СЃС‚РІРѕСЂРµРЅРЅСЏ Р·Р° Р·Р°РґР°РЅРёРјРё Р°С‚СЂРёР±СѓС‚Р°РјРё



    public function updateOrCreate()
    {
        //dd('updateOrCreate');

        $post = Post::updateOrCreate(
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


        dd('updateOrCreate records id= ' . $post->id);
    }
}
