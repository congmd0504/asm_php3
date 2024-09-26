<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::table('categories')->get();
        $products = DB::table('products')->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as name_cate', 'categories.id as id_cate')
            ->limit(8)->get();
        return view('client.home', compact('categories', 'products'));
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
        $product = DB::table('products')->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as name_cate', 'categories.id as id_cate')
            ->where('products.id', $id)
            ->first();
        $listProduct = DB::table('products')->get();
        $categories = DB::table('categories')->get();
        // dd($product);
        return view('client.product-detail', compact('product', 'listProduct', 'categories'));
    }
    public function shop($id = null)
    {
        if ($id == null) {
            $products = DB::table('products')->join('categories', 'categories.id', '=', 'products.category_id')
                ->select('products.*', 'categories.name as name_cate', 'categories.id as id_cate')
                ->get();
        } else {
            $products = DB::table('products')->join('categories', 'categories.id', '=', 'products.category_id')
                ->select('products.*', 'categories.name as name_cate', 'categories.id as id_cate')
                ->where('products.category_id', $id)
                ->get();
        }
        $listProduct = DB::table('products')->get();
        $categories = DB::table('categories')->get();
        // dd($products);
        return view('client.shop', compact('products', 'categories', 'listProduct'));
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
}
