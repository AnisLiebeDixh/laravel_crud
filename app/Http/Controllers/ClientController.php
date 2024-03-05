<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    function store (Request $request){
        $client=new Client();
        $client->name= $request->name;
        $client->email= $request->email;
        $client->adresse= $request->adresse;
        $client->save();
        return redirect("client");

    }
    function create(){
        return view("client.create");
    }

    function index(){
        $clients=Client::all();
        return view("client.index",["clients"=> $clients]);
    }

    function edit($id){
    $client=Client::find($id);  
     return view("client.edit",["client"=> $client]);
    }
    function update(Request $request , $id){
        $client=Client::find($id); 
        $client->name= $request->name;
        $client->email= $request->email;    
        $client->adresse=$request->adresse;
        $client->update();
        return redirect("client");
    }
    function destroy($id){
    $client=Client::find($id);
    $client->delete();
    return redirect("client");
    }
}
