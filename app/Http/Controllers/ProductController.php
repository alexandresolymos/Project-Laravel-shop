<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function random()
    {
        $products = Product::inRandomOrder()->take(5)->get();
        return view('home', compact('products'));
    }

    public function index()
    {
        return view('admin.index');
    }

    public function product()
    {
        $product = Product::all()->reverse();
        return view('admin.product.index', compact('product'));
    }

    public function indextwo()
    {
        $product = Product::all();
        return view('shop', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        $fileName = null;
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $fileName = md5($image->getClientOriginalName() . time()) . "." . $image->getClientOriginalExtension();
            $image->move('./img/', $fileName);
        }

       Product::create([
           'title' => $request->input('title'),
           'slugy' => $request->input('slugy'),
           'subtitle' => $request->input('subtitle'),
           'description' => $request->input('description'),
           'price' => $request->input('price'),
            'image' => $fileName,

        ]);

        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product', compact('product'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        if(request()->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = request()->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = request()->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            request()->file('image')->move('./img/', $fileNameToStore);
        }


        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->slugy = $request->input('slugy');
        $product->slug = Str::slug($product->slugy, '-');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        if($request->hasFile('image')){
            $product->image = $fileNameToStore;
        }


        $product->save();

        return redirect()->route('admin.product.index')->with(
            'success', "L'article à été modifier"
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index')->with('success',"Produit bien supprimé");

    }

}
