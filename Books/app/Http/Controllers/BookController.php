<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;
use Illuminate\Http\UploadedFile;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //read from DB
        $allBook = BookModel::all();
                //page name   //key
        return view('books',['allBook'=>$allBook]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // create new model to connect to table in database 
        $book = new BookModel();
        $request->validate([
            'book_title' =>'required',
            'book_image'=>'required',
        ]);
        // database         form name 
        $book->book_title = $request->book_title;
        $book->book_description = $request->book_description;
        $book->book_author = $request->book_author;
        // dd($request->book_image);
      
        // $image_path = $request->file('book_image')->store('images');
        // dd($request);
        $book->book_image = $request->book_image;
        $book->save();

        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $books = BookModel::find($id);
        return view('updateBook',['request'=>$books,'id'=>$id] );
    } 
    
    public function updateBook(Request $request, $id)
    {
        $book = BookModel::find($id);
        $book->book_title = $request->book_title;
        $book->book_description = $request->book_description;
        $book->book_author = $request->book_author;
        $book->book_image = $request->book_image;
        $book->save();
        return redirect('/index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $book=BookModel::find($id);
        
        $book->delete();
        return redirect('/index');


        //
    }
}
