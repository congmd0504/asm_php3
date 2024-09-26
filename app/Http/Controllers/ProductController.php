<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as name_cate')
            ->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('admin.products.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
        }
        $data = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'quality' => $request->input('quality'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'category_id' => $request->input('category_id'),
            'image' => 'uploads/' . $imageName,
        ];
        // dd($data);
        DB::table('products')->insert($data);
        return redirect()->route('products.create')->with('success', 'Thêm sản phẩm thành công !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = DB::table('products')->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as name_cate')->where('products.id', $id)->first();
        return view('admin.products.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = DB::table('products')->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as name_cate')->where('products.id', $id)->first();
        $categories = DB::table('categories')->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $imageProduct = 'uploads/'.$imageName ;
        } else {
            $imageProduct = $request->input('anhcu');
        }
        $data = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'quality' => $request->input('quality'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'category_id' => $request->input('category_id'),
            'image' => $imageProduct,
        ];
        // dd($data);
        DB::table('products')->where('id',$id)->update($data);
        return redirect()->route('products.index')->with('success', 'Cập nhập sản phẩm thành công !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('products')->where('id',$id)->delete();
        return redirect()->route('products.index')->with('success', 'Xóa sản phẩm thành công !');
    }
}
