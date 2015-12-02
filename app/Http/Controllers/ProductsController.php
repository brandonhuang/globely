<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $term = $request->input('query');
        $prop = $request->input('prop');

        if(isset($term)) {
            $products = Product::search($prop, $term)->get();
        } else {
            $products = Product::all();
        }

        // Pass in articles data to view
        return view('products.index', ['products' => $products, 'query' => $term, 'prop' => $prop]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $company_id = Auth::user()->id;
        $params = $request->input();

        $product = new Product;
        $product->name = $params['name'];
        $product->company_id = $company_id;
        $product->brand = $params['brand'];
        $product->description = $params['description'];
        $product->price = $params['price'];
        $product->rating = $params['rating'];

        $product->save();

        $imageName = $product->id . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('../public/product_images/', $imageName);

        return redirect()->action('ProductsController@index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        // Find similar products, limit to 3 results
        $simProducts = Product::search('Any', $product->name)->take(3)->get();

        return view('products.show', ['product' => $product, 'simProducts' => $simProducts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $params = $request->input();
        
        $product = Product::find($id);
        $product->name = $params['name'];
        $product->brand = $params['brand'];
        $product->description = $params['description'];
        $product->price = $params['price'];
        $product->rating = $params['rating'];

        $product->save();

        $imageName = $product->id . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('../public/product_images/', $imageName);

        return redirect()->action('ProductsController@show', [$id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
