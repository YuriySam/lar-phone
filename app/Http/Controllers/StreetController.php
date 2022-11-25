<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\street;

class SreetController extends Controller
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


        $streets = Street::all();
        
        
        
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
        return view('street.index', compact('streets'));
    }



    public function create()
    {
        return view('street.create');
    }


    
    public function store()
    {
        $data = request()->validate([
            'func' => 'string',
            'funindex' => 'integer',
         ]);
        Street::create($data);
        return redirect()->route('street.index');
    }



    public function show(Street $street){
        
        return view('street.show', compact('street'));
    }


    public function edit(Street $street)
    {
        
        return view('street.edit', compact('street'));
    }


    public function update(Street $street)
    {

        $data = request()->validate([
            'func' => 'string',
            'funindex' => 'integer',
        ]);
        //dd($data);
        $street->update($data);
        return redirect()->route('street.show', $street->id);
    }

    public function delete()
    {
        $street = Street::find(5);
        $street->delete();

        dd('delete psge' . $street->id);
    }

    
    public function undelete()
    {
        $street = Street::withTrashed()->find(5);
        $street->restore();

        dd('undelete psge  ' . $street->id);
    }


    public function destroy(Street $street)
    {
        $street->delete();

        return redirect()->route('street.index');
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
        $street = Street::firstOrCreate(
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


        dd('firstOrCreate records id= ' . $street->id);
    }

    //updateOrCreate - С‡Рё РѕРЅРѕРІР»РµРЅРЅСЏ С‡Рё СЃС‚РІРѕСЂРµРЅРЅСЏ Р·Р° Р·Р°РґР°РЅРёРјРё Р°С‚СЂРёР±СѓС‚Р°РјРё



    public function updateOrCreate()
    {
        //dd('updateOrCreate');

        $street = Street::updateOrCreate(
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


        dd('updateOrCreate records id= ' . $street->id);
    }
}
