<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
        return view('admin.contact.index',['contacts' => $contacts]);
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
    
        if ($contact) {
            $contact->delete();
            return redirect()->route('contact.index')->with('success', 'Xóa phản hồi thành công!');
        } else {
            return "Không tìm thấy bản ghi để xóa.";
        }
    }
}
