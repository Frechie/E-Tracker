<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\SupportClient\Client;
use Illuminate\Http\Request;

class ClientController extends Controller {
    
    public function __construct()  {
        $this->middleware(['auth', 'verified']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {    
        //Gets all client records and pass the collectins into the view

        $clients = Client::all();

        return view('client.client')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  {
        return view('client.add-client');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        $client = Client::create([
            'support_type_id' => 1,
            'client_name' => $request->input('client_name'),
            'client_description' => $request->input('client_desc')            
        ]);

        return redirect('clients') 
                       ->with('createClientMessage', 'Successfully created ' . $request->input('client_name') . '!!!');
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupportClient\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)  {
        //
        $client = Client::findOrFail($client->client_id);

        return view('client.edit-client')->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SupportClient\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)  {
        //
        $client = Client::findorFail($client->client_id);

        return view('client.edit-client')->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SupportClient\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupportClient\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client) {
        //
    }
}
