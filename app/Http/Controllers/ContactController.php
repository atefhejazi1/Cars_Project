<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('contact.index')->with('contact', $contact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'require',
            'message' => 'require',

        ]);

        $contact = new Contact();
        $contact->name = $request->post('name');
        $contact->email = $request->post('email');
        $contact->phone = $request->post('phone');
        $contact->subject = $request->post('subject');
        $contact->message = $request->post('message');

        $contact->save();
        return redirect()->route('contact.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $contact = Contact::findorFail($id);

        // return view('contact.edit', compact('contact'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $validated = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'subject' => 'required',
        //     'phone' => 'require',
        //     'message' => 'require',

        // ]);

        // $contact = Contact::findorFail($id);
        // $contact->name = $request->input('name');
        // $contact->email = $request->input('email');
        // $contact->phone = $request->input('phone');
        // $contact->subject = $request->input('subject');
        // $contact->message = $request->input('message');


        // $contact->save();
        // return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findorFail($id)->delete();
        return redirect()->route('contact.index');
    }
}
