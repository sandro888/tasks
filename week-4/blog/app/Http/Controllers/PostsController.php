<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;

class PostsController extends Controller
{
    public function __construct()
    {
        // $this->middleware("auth");
        $this->middleware("CheckIfcanPost");
    }
    public function index()
    {
        
        // return "bla";
        return posts::get('/posts/store/index','posts.index');
    }
    public function create()
    {
        return view("posts.create");
    }
    public function store(Request $request)
    {
        // $post = new posts;
        // $post->title=$request->input('title');
        // $post->text=$request->input('text');
        // $post->save();
        posts::create(
            [
                "title" => $request->input('title'),
                "text" => $request->input('text'),
                "description" => $request->input('description'),
            ]
        );
        $posts=posts::get();
        return view("posts.index",["posts"=>$posts]);
    }
}
