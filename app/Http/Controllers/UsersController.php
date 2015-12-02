<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $users = User::all();

        return view('users/index')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $params = $request->input();

        $user = new User;
        $user->type = $params['user-type'];
        $user->email = $params['email'];
        $user->password = bcrypt($params['password']);
        $user->company_name = $params['company-name'];
        $user->country = $params['country'];
        $user->city = $params['city'];
        $user->website = $params['website'];
        $user->tax_id = $params['tax-id'];

        $user->save();

        $imageName = $user->id . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('../public/user_images/', $imageName);

        return redirect()->action('UsersController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $products = Product::search('Supplier', $user->company_name)->get();

        return view('users.show', ['user' => $user, 'products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
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
        //
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
