<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
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


        $categories = Category::all();
        
        
        
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
        return view('category.index', compact('categories'));
    }



    public function create()
    {
        return view('category.create');
    }


    
    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            
        ]);
        Category::create($data);
        return redirect()->route('category.index');
    }

    public function show(Category $category){
        
        return view('category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        
        return view('category.edit', compact('category'));
    }


    public function update(Category $category)
    {
        
        $data = request()->validate([
            'title' => 'string',
           
        ]);
        //dd($data);
        $category->update($data);
        return redirect()->route('category.show', $category->id);
    }

    public function delete()
    {
        $category = Category::find(5);
        dd('delete psge' . $category->id);

        $category->delete();

        dd('delete psge' . $category->id);
    }

    
    public function undelete()
    {
        $category = Category::withTrashed()->find(5);
        $category->restore();

        dd('undelete psge  ' . $category->id);
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index');
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
        $category = Category::firstOrCreate(
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


        dd('firstOrCreate records id= ' . $category->id);
    }

    //updateOrCreate - С‡Рё РѕРЅРѕРІР»РµРЅРЅСЏ С‡Рё СЃС‚РІРѕСЂРµРЅРЅСЏ Р·Р° Р·Р°РґР°РЅРёРјРё Р°С‚СЂРёР±СѓС‚Р°РјРё



    public function updateOrCreate()
    {
        //dd('updateOrCreate');

        $category = Category::updateOrCreate(
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


        dd('updateOrCreate records id= ' . $category->id);
    }
}
