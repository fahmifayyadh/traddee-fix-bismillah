<?php

namespace App\Http\Controllers\ukm;

use App\Product;
use App\ProductImage;
use App\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function subCategory($id){
        $sub = SubCategory::where('category_id', $id)->get();
        return response()->json(['sub'=>$sub], 200);
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
        $ukm = Auth::user()->ukm;
        $product = Product::create([
            'ukm_id' => $ukm->id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'category_id' => $request->category,
            'sub_category_id' => $request->subcategory,
            'variant' => $request->variant,
            'price' => $request->price,
            'available' => 1
        ]);

        if (!empty($request->image)){
            foreach ($request->image as $index=>$img){
                $extension = $request->image[$index]->getClientOriginalExtension();
                $filenametostore = md5($ukm->id . Carbon::now()) . '.' . $extension;
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $request->image[$index]->storeAs('public/product', $filenametostore),
                ]);
            }
        }

        Session::flash('success', 'sukses create product');
        return redirect()->back();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $photo = ProductImage::where('product_id', $product->id)->get();
        if (!empty($photo)){
            foreach ($photo as $photos){
                Storage::delete($photos->image);
                $photos->delete();
            }
        }
        $product->delete();

        Session::flash('success', 'sukses hapus produk');
        return redirect()->back();

    }
}
