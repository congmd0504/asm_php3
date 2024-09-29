<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= DB::table('users')->get();
        return view('admin.users.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ];
        DB::table('users')->insert($data);
        return redirect()->route('users.index')->with('success','Thêm mới thành công!');
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
        $user = DB::table('users')->where('id',$id)->first();
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
        ];
        DB::table('users')->where('id',$id)->update($data);
        return redirect()->route('users.index')->with('success','Cập nhập thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect()->route('users.index')->with('success','Xóa thành công!');
    }
}
