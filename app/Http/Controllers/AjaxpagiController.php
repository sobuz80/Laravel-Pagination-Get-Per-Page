<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AjaxpagiController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $products = Product::paginate(5);

        if ($request->ajax()) {
            return view('pagiresult',compact('products'));
        }

        return view('ajaxpagi-show',compact('products'));

    }
}