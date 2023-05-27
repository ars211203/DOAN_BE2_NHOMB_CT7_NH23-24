<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $book = Book::find($id);
        $book_name = $book->book_name;
        $sections = Section::all();
        return view('sections.index',compact('id','book_name','sections','book'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('sections.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $book_id)
    {
        $request->validate([
            'sections_name' => 'required|max:255',
            'sections_content' => 'required|max:5000',
        ]);
        $sections = new Section($request->all());
        $sections->book_id = $book_id;
        $sections->save();
        return redirect()->route('book.sections', $book_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_book,$id)
    {
        $book = Book::find($id_book);
        $sections = Section::find($id);
        return view('sections.edit',compact('sections','book'));
    }

    /**x
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id_book,  $id)
    {
        $book = Book::find($id_book);
        $sections = Section::find($id);
        $sections->update($request->all());
        return redirect()->route('book.sections',$book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($book_id,$id)
    {
        $book = Book::find($book_id);
        $sections = Section::find($id);
        if ($sections) {
            $sections->delete();
            return redirect()->route('book.sections',['id' => $book_id]);
        }else{
            return redirect()->back()->with('thongbao', 'không tồn tại sections');
        }
    }
}
