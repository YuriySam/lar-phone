<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\func;

class FuncController extends Controller
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


        $funcs = Func::all();
        
        
        
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
        return view('func.index', compact('funcs'));
    }



    public function create()
    {
        return view('func.create');
    }


    
    public function store()
    {
        $data = request()->validate([
            'func' => 'string',
            'funindex' => 'integer',
         ]);
        Func::create($data);
        return redirect()->route('func.index');
    }

    public function show(Func $func){
        
        return view('func.show', compact('func'));
    }

    public function edit(func $func)
    {
        
        return view('func.edit', compact('func'));
    }


    public function update(Func $func)
    {

        $data = request()->validate([
            'func' => 'string',
            'funindex' => 'integer',
        ]);
        //dd($data);
        $func->update($data);
        return redirect()->route('func.show', $func->id);
    }

    public function delete()
    {
        $func = Func::find(5);
        $func->delete();

        dd('delete psge' . $func->id);
    }

    
    public function undelete()
    {
        $post = Func::withTrashed()->find(5);
        $post->restore();

        dd('undelete psge  ' . $post->id);
    }


    public function destroy(Func $func)
    {
        $func->delete();

        return redirect()->route('func.index');
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
        $func = Func::firstOrCreate(
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


        dd('firstOrCreate records id= ' . $func->id);
    }

    //updateOrCreate - С‡Рё РѕРЅРѕРІР»РµРЅРЅСЏ С‡Рё СЃС‚РІРѕСЂРµРЅРЅСЏ Р·Р° Р·Р°РґР°РЅРёРјРё Р°С‚СЂРёР±СѓС‚Р°РјРё



    public function updateOrCreate()
    {
        //dd('updateOrCreate');

        $branch = Func::updateOrCreate(
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


        dd('updateOrCreate records id= ' . $branch->id);
    }
}
