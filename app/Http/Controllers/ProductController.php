<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    /**
     * Function random pour prendre 5 produits aléàtoirement
     *
     * @return \Illuminate\Http\Response
     */

    public function random()
    {
        $products = Product::inRandomOrder()->take(5)->get();
        return view('home', compact('products'));
    }


    /**
     * Retourne la vue index
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Recuperation de la liste des produits facon inversée dans l'admin
     *
     * @return \Illuminate\Http\Response
     */
    public function showadmin()
    {
        $product = Product::all()->reverse();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Recuperation des produits dans le shop
     *
     * @return \Illuminate\Http\Response
     */
    public function indexshop()
    {
        $product = Product::all();
        $categories = Category::all();
        $count = $product->count();

        return view('shop', [
            'product' => $product,
            'categories' => $categories,
            'count' => $count
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', [
            'categories' => $categories,
        ]);
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
            'category_id' => $request->input('category_id'),
            'slugy' => $request->input('slugy'),
            'subtitle' => $request->input('subtitle'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'balise_alt' => $request->input('balise_alt'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'image' => $fileName,
        ]);
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        $category = Category::where('id', $product->category_id)->firstOrFail();
        return view('product', compact('product', 'category'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories,
        ]);
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

        $fileName = null;
        $currentImage = $product->image;

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $fileName = md5($image->getClientOriginalName() . time()) . "." . $image->getClientOriginalExtension();
            $image->move('./img/', $fileName);
        }
        else
            $fileName = $currentImage;

        if($fileName && $currentImage)
        {
            Storage::delete('./img/' . $fileName);
        }

        $product->title = $request->input('title');
        $product->category_id = $request->input('category_id');
        $product->subtitle = $request->input('subtitle');
        $product->slugy = $request->input('slugy');
        $product->slug = Str::slug($product->slugy, '-');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->balise_alt = $request->input('balise_alt');
        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->image = $fileName;

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
