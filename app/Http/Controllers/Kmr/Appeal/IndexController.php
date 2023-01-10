<?php

namespace App\Http\Controllers\Kmr\Appeal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;

use App\Models\Appeal;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class IndexController extends BaseController
{

      
    //public function __invoke()
    /*
    //повинен працювати для всіх записів
    public function __invoke()
    {
       // $data = $request -> validated();
      //  $filter = app()->make(PostFilter::class, ['queryParams => array_filter($data)']);
       
        //$post = Post::where('is published',1)->get();
        $posts = Post::all();
        //$posts = Post::filter($filter)->paginate(7);
        return view('post.index', compact('posts'));
    }

    //було на екрані 
    public function __invoke(FilterRequest $request)
    {
       $data = $request -> validated();
       $filter = app()->make(PostFilter::class, ['queryParams => array_filter($data)']);
       
        //$post = Post::where('is published',1)->get();
        $posts = Post::filter($filter)->paginate(7);
        return view('post.index', compact('posts'));
    }
   

    //зкопійовано з резерву
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams => array_filter($data)']);

        dd($data);

        $post = Post::where('is published', 1)->get();
        //$posts = Post::all();
        $posts = Post::paginate(7);
        return view('post.index', compact('posts'));
    }
 
    public function __invoke()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }
    */

    public function __invoke()
    {
         
         $this->authorize('view', auth()->user());
        // dd('appeal.IndexController');
        $appeals = Appeal::all();
        return view('kmr.appeal.index', compact('appeals'));
    }

}


