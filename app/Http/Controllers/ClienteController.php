<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        return Cliente::all();
    }
    public function show($id){
        return Cliente::findOrFail($id);
    }
    public function store(Request $request){
        Cliente::create($request->all());
    }
    public function update(Request $request, $id){
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
    }
    public function destroy($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
    }
}
