<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;

class ProductController extends Controller
{
    public function index() {
        $productList = Product::all();
        return view('product.all', ['productList'=>$productList]);
    }

    public function show($id) {
        $p = Product::find($id);
        $data['product'] = $p;
        $s = Product::find($id)->supplier;
        $data['supplier'] = $s;
        return view('product.show', $data);
    }

    public function create() {
        $suppliers = Supplier::all();
        return view('product.form', array('suppliers' => $suppliers));
    }

    public function store(Request $r) {
        $p = new Product();
        $p->name = $r->name;
        $p->description = $r->description;
        $p->price = $r->price;
        $p->stock = $r->stock;
        $p->supplier_id = $r->supplier_id;
        $p->save();
        return redirect()->route('product.index');
    }

    public function edit($id) {
        $product = Product::find($id);
        $suppliers = Supplier::all();
        return view('product.form', array('product' => $product, 'suppliers' => $suppliers));
    }

    public function update($id, Request $r) {
        $p = Product::find($id);
        $p->name = $r->name;
        $p->description = $r->description;
        $p->price = $r->price;
        $p->stock = $r->stock;
        $p->supplier_id = $r->supplier_id;
        $p->save();
        return redirect()->route('product.index');
    }

    public function destroy($id) {
        $p = Product::find($id);
        $p->delete();
        return redirect()->route('product.index');
    }
}
?>
