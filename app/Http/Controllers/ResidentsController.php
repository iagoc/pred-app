<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ResidentsController extends Controller
{

    public function index()
    {
        return view('resident.index');
    }

    public function create(Request $request)
    {
        $buildings = Building::all();
        return view('resident.create', compact('buildings'));
    }

    public function store(Request $request) 
    { 
//utilizado para retornar um valor ao front
        
    }

    public function dados(Request $request)
    {
        Log::info('Teste: ' . json_encode($request->toArray()));
        $name = request('name');

        $addressReturn = Building::select('address_kitnet', 'address_store', 'address_house') //https://laravel.com/docs/8.x/queries
                    ->where('address', $name)
                    ->get(); 
        

        return response()->json($addressReturn); 
    }

}
