<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function  __construct()
    {
        $this->middleware('auth.password')->only('edit');
    }

    public function edit(Product $product)
    {

        return view('products.edit', compact('product'));
    }

    public function verifyPassword(Request $request, Product $product)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $password = $request->password;

        if (!Hash::check($password, Auth::user()->password)) {
            return redirect()->back()->with('error', 'Password Salah');
        }

        return view('products.edit', compact('product'))->with('update', 'success');
    }

    public function store(Request $request)
    {

        $number = mt_rand(1000000000, 9999999999);

        if($this->productCodeExists($number)) {
            $number = mt_rand(1000000000, 9999999999);
        }

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|gt:0'
        ]);

        $request['barcode'] = $number;

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'barcode' => $request->barcode,
        ]);

        return redirect()->route('product.create')->with('createId', $product->id);
    }

    public function productCodeExists($number)
    {
        return product::whereBarcode($number)->exists();
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|gt:0',
            'quantity' => 'required'
        ]);

        if ($request->action === 'Submit') {
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
            ]);

            return redirect()->route('product.index')->with('update', 'success');
        } elseif ($request->action === 'Delete') {
            $product->delete();

            return redirect()->route('product.index')->with('update', 'success');
        }

        return redirect()->route('product.index')->with('error', 'Invalid action for update');
    }



    public function destroy(Request $request, Product $product)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        if (Hash::check($request->password, auth()->user()->password)) {
            $product->delete();
            return redirect()->route('product.index')->with('delete', 'success');
        } else {
            return redirect()->route('product.index')->with('error', 'Invalid password for product deletion');
        }
    }
}
