<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsFormRequest;
use App\Models\Contacts;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Contact';
        return view('contacts.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactsFormRequest $request)
    {
       /* Contacts::create([
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message')
        ]);
        set_flash("Votre message est envoyer avec succes", 'success');
        return redirect(route('rout_path'));*/
        $mailable = new ContactMessageCreated($request->name, $request->email, $request->message);
         Mail::to('admin@gmail.com')->send($mailable);
        set_flash("Nous vous repondons dans les plus brefs delais", 'success');
        return redirect(route('rout_path'));
         
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
