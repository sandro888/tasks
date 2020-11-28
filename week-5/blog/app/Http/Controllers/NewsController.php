<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\News;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("news.index",["news"=>News::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("news.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        News::create([
            "title"=>$request->input("title"),
            "description"=>$request->input("description"),

        ]);
        return redirect()->route("adminindex");
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news=News::where("id",$id)->firstOrFail();
        $comments=Comments::where("product_id",$id)->get();
    	return view("news.show",["news"=>$news,"comments"=>$comments]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news=News::where("id",$id)->firstOrFail();
    	return view("news.edit",["news"=>$news]);
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
    	News::where("id",$request->input("id"))->update([
    		"title"=>$request->input("title"),
    		"description"=>$request->input("description")
        ]);
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        News::where("id",$request->input("id"))->delete();
        return redirect()->back();
          
    }
    public function storecomment(Request $request)
    {
    	Comments::create([
    		"product_id"=>$request->input("id"),
    		"comments"=>$request->input("comments"),
        ]);
        return redirect()->back();
    }
}
