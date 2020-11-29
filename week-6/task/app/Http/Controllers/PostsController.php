<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Comments;
use Carbon\Carbon;
use App\Categories;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('verified');
    }

    public function index()
    {
        return view("posts.index",["posts"=>Posts::get()]);

    }
    public function dashboard()
    {
        return view("posts.admin",["posts"=>Posts::get()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categories::pluck('name','id');

        return view("posts.create",compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    
    {


        // $posts->title = $request->input('title');
        // $posts->description = $request->input('description');
        // $posts->image = $request->file('image');
        //  if($request->hasFile('image'))

        Posts::create([
            "title"=>$request->input("title"),
            "description"=>$request->input("description"),
            "category_id"=>$request->input("category_id"),
            "image"=>$request->file("image")->store('postedpics'),

            
            ]);
            return redirect("/");
                 

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts=Posts::where("id",$id)->firstOrFail();
        $comments=Comments::where("post_id",$id)->get();

    	return view("posts.show",["posts"=>$posts,"comments"=>$comments]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts=Posts::where("id",$id)->firstOrFail();
    	return view("posts.edit",["posts"=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Posts::where("id",$request->input("id"))->update([
    		"title"=>$request->input("title"),
            "description"=>$request->input("description"),
            "image"=>$request->file("image")->store('postedpics'),

        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Posts::where("id",$request->input("id"))->delete();
        return redirect()->back();
          
    }
    public function storecomment(Request $request)
    {
    	Comments::create([
    		"post_id"=>$request->input("id"),
    		"comments"=>$request->input("comments"),
        ]);
        return redirect()->back();
    }

    public function showCat($id)
    {
        $category_posts=Posts::where('category_id',$id)->get();
        $categoryId=$id;
        return view('posts.category_list',compact('category_posts','categoryId'));
    }
}
