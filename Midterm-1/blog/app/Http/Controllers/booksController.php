<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
use App\genre;
class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("books.index",["books"=>books::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        books::create([
            "title"=>$request->input("title"),
            "description"=>$request->input("description"),
            "author_name"=>$request->input("author_name"),
            "Genre_name"=>$request->input("Genre_name"),

        ]);
        genre::create([
    		"Genre_name"=>$request->input("Genre_name"),
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
        $books=books::where("id",$id)->firstOrFail();
        $genre=genre::where("id",$id)->get();
    	return view("books.show",["books"=>$books,"Genre_name"=>$genre]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books=books::where("id",$id)->firstOrFail();
    	return view("books.edit",["books"=>$books]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        books::where("id",$request->input("id"))->update([
    		"title"=>$request->input("title"),
    		"description"=>$request->input("description"),
    		"author_name"=>$request->input("author_name"),
    		"Genre_name"=>$request->input("Genre_name")
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
        books::where("id",$request->input("id"))->delete();
        return redirect()->back();
          
    }
}
