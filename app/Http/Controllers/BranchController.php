<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\branch;

class BranchController extends Controller
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


        $branchs = Branch::all();
        
        
        
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
        return view('branch.index', compact('branchs'));
    }



    public function create()
    {
        return view('branch.create');
    }


    
    public function store()
    {
        $data = request()->validate([
            'branch' => 'string',
            'bransort' => 'integer',
            
            
        ]);
        Branch::create($data);
        return redirect()->route('branch.index');
    }

    public function show(Branch $branch){
        
        return view('branch.show', compact('branch'));
    }

    public function edit(branch $branch)
    {
        
        return view('branch.edit', compact('branch'));
    }


    public function update(Branch $branch)
    {
        
        $data = request()->validate([
            'branch' => 'string',
            'bransort' => 'integer',
        ]);
        //dd($data);
        $branch->update($data);
        return redirect()->route('branch.show', $branch->id);
    }

    public function delete()
    {
        $post = Branch::find(5);
        $post->delete();

        dd('delete psge' . $post->id);
    }

    
    public function undelete()
    {
        $post = Branch::withTrashed()->find(5);
        $post->restore();

        dd('undelete psge  ' . $post->id);
    }


    public function destroy(Branch $branch)
    {
        $branch->delete();

        return redirect()->route('branch.index');
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
        $post = Branch::firstOrCreate(
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

        $branch = Branch::updateOrCreate(
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
