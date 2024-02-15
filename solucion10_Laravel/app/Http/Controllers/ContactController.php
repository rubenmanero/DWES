<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Supplier;

class ContactController extends Controller
{
    public function index() {
        $contactList = Contact::all();
        return view('contact.all', ['contactList'=>$contactList]);
    }

    public function show($id) {
        $p = Contact::find($id);
        $data['contact'] = $p;
        return view('contact.show', $data);
    }

    public function create() {
        $suppliers = Supplier::all();
        return view('contact.form', array('suppliers' => $suppliers));
    }

    public function store(Request $r) {
        $p = new Contact();
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->email = $r->email;
        $p->phone_number = $r->phone_number;
        $p->supplier_id = $r->supplier_id;
        $p->save();
        return redirect()->route('contact.index');
    }

    public function edit($id) {
        $contact = Contact::find($id);
        $suppliers = Supplier::all();
        return view('contact.form', array('contact' => $contact, 'suppliers' => $suppliers));
    }

    public function update($id, Request $r) {
        $p = Contact::find($id);
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->email = $r->email;
        $p->phone_number = $r->phone_number;
        $p->supplier_id = $r->supplier_id;
        $p->save();
        return redirect()->route('contact.index');
    }

    public function destroy($id) {
        $p = Contact::find($id);
        $p->delete();
        return redirect()->route('contact.index');
    }
}
?>
