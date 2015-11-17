<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticController extends Controller
{
    public function getIndex()
    {
        return view('static.index');
    }

    public function getStyleGuide()
    {
        return view('static.style_guide');
    }

    public function getHowItWorks()
    {
        return view('static.how_it_works');
    }
    public function getApply(Request $request)
    {
        $type = $request->input('type');
        $distributor = false;
        $supplier = false;

        switch ($type) {
            case 'distributor':
                $distributor = 'checked';
                break;
            case 'supplier':
                $supplier = 'checked';
                break;
        }

        return view('static.apply', ['distributor' => $distributor, 'supplier' => $supplier]);
    }
    public function getLogin(){
        return view('static.login');
    }
}
