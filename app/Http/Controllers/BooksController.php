<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Categories;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();
        $i = (request()->input('page', 1) - 1) * 5;
        return view('books.index', compact('book','i'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('books.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $request->validate([
            'book_name' => 'required|string|max:255',
            'book_image' => 'required|string|max:255',
            'book_author' => 'required|string|max:255',
            'book_source' => 'required|string|max:255',
            'book_description' => 'required|string|max:255',
        ]);
        $data = $request->all();
        if ($request->hasFile('book_image')) {
            $destination_path = 'public/images/books';
            $image = $request->file('book_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('book_image')->storeAs($destination_path, $image_name);
            $data['book_image'] = $image_name;
        }
        $arrBookType = implode(", ",$request->input('book_type'));
        $data['book_type'] = $arrBookType;
        // $emails = User::pluck('email')->all();
        // $name = "tất cả người dùng";
        // $book_name = $data['book_name'];
        // foreach ($emails as $email) {
        //     Mail::send('emails.Sendmail', compact('name','book_name'), function($message) use ($email) {
        //         $message->to($email)->subject('Thông báo sách mới!');
        //     });
        // }
        book::create($data);
        return redirect()->route('list.book')->with('thongbao', 'Thêm sách thành công');
    }
    public function Testmail(){

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
    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */ 
    // public function update(Request $request,$id)
    // {
    //     $book = Book::find($id);
    //     $book->update($request->all());
    //     return redirect()->route('book-index')->with('thongbao', 'sửa thành công');
    // }
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->update($request->all());
        return redirect()->route('list.book', compact('book'))->with('thongbao', 'cập nhật sách thành công');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->userReadHistories()->delete();
        $book->delete();
        return redirect()->route('list.book')->with('thongbao', 'Xóa người dùng thành công');
    }
    public function complete($id)
    {
        $book = Book::find($id);
        $book->book_status = 1;
        $book->save();
        return redirect()->back();
    }
}
