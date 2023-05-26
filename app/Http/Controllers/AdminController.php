<?php

namespace App\Http\Controllers;


use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        $users = User::all();
        $totalBooks = DB::table('books')->count();
        $totalUsers = DB::table('users')->count();
        $totalRating = DB::table('reviews')->sum('rating');
        $totalReviews = DB::table('reviews')->count();
        $Result = $totalRating / $totalReviews;
        $totalViews = DB::table('books')->sum('book_view');
        return view('admin.index',compact('totalBooks','totalUsers','Result','totalViews'));
        //return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function login(){
        return view('auth.login');
    }
    public function registration(){
        return view('auth.registration');
    }
    public function register(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('user_image')) {
            $destination_path = 'public/images/users';
            $image = $request->file('user_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('user_image')->storeAs($destination_path, $image_name);
            $data['user_image'] = $image_name;
        }
         User::create([
            'user_fullname' => $data['user_fullname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_image' => $data['user_image'],
        ]);
        return redirect()->route('login');
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->user_type == 1) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('index');
            }
        }
       return redirect("login")->with('thongbao', 'Tài khoản hoặc mật khẩu không chính xác!');
    }
    public function signOut()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
