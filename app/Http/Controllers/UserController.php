<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::paginate(5);
        $i = (request()->input('page', 1) - 1) * 5;
        return view('users.index', compact('user','i'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_fullname' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'user_image' => 'required',
        ]);
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
            'user_image' => $data['user_image'], //image
        ]);
        return redirect()->route('list.user')->with('thongbao', 'Thêm người dùng thành công');
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
        $user = User::find($id);
        if($user){
            return view('users.edit',compact('user'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        if($user){
            $user->update($request->all());
            return redirect()->route('list.user')->with('thongbao', 'Sửa người dùng thành công');
        }

       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('thongbao', 'không tồn tại người dùng');
        } else {
            $user->delete();
            return redirect()->route('list.user')->with('thongbao', 'Xóa người dùng thành công');
        }
    }
}
