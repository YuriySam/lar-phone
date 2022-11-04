<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quote;

class QuoteController extends Controller
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


        $quotes = Quote::all();
        
        
        
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
        return view('quote.index', compact('quotes'));
    }



    public function create()
    {
        return view('quote.create');
    }


    
    public function store()
    {
        $data = request()->validate([
            'quote' => 'string',
        ]);
        Quote::create($data);
        return redirect()->route('quote.index');
    }

    public function show(Quote $quote){
        
        return view('quote.show', compact('quote'));
    }

    public function edit(quote $quote)
    {
        
        return view('quote.edit', compact('quote'));
    }


    public function update(Quote $quote)
    {

        $data = request()->validate([
            'quote' => 'string',
           
        ]);
        //dd($data);
        $quote->update($data);
        return redirect()->route('quote.show', $quote->id);
    }

    public function delete()
    {
        $func = Quote::find(5);
        $func->delete();

        dd('delete psge' . $quote->id);
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
        $quote = Quote::firstOrCreate(
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


        dd('firstOrCreate records id= ' . $quote->id);
    }

    //updateOrCreate - С‡Рё РѕРЅРѕРІР»РµРЅРЅСЏ С‡Рё СЃС‚РІРѕСЂРµРЅРЅСЏ Р·Р° Р·Р°РґР°РЅРёРјРё Р°С‚СЂРёР±СѓС‚Р°РјРё



    public function updateOrCreate()
    {
        //dd('updateOrCreate');

        $branch = Quote::updateOrCreate(
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
