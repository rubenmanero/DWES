<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Contact;

class SupplierController extends Controller
{
    public function index() {
        $supplierList = Supplier::all();
        return view('supplier.all', ['supplierList'=>$supplierList]);
    }

    public function show($id) {
        $p = Supplier::find($id);
        $data['supplier'] = $p;
        return view('supplier.show', $data);
    }

    public function create() {
        $contacts = Contact::all();
        return view('supplier.form', array('contacts' => $contacts));
    }

    public function store(Request $r) {
        $p = new Supplier();
        $p->name = $r->name;
        $p->address = $r->description;
        $p->city = $r->city;
        $p->country = $r->country;
        $p->contact_id = $r->contact_id;
        $p->save();
        return redirect()->route('supplier.index');
    }

    public function edit($id) {
        $supplier = Supplier::find($id);
        $contacts = Contact::all();
        return view('supplier.form', array('supplier' => $supplier, 'contacts' => $contacts));
    }

    public function update($id, Request $r) {
        $p = Supplier::find($id);
        $p->name = $r->name;
        $p->address = $r->description;
        $p->city = $r->city;
        $p->country = $r->country;
        $p->contact_id = $r->contact_id;
        $p->save();
        return redirect()->route('supplier.index');
    }

    public function destroy($id) {
        $p = Supplier::find($id);
        $p->delete();
        return redirect()->route('supplier.index');
    }

    public function products() {
        $supplierList = Supplier::all();
        return view('supplier.products', ['supplierList'=>$supplierList]);
    }
}
?>
