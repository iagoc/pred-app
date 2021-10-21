<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BuildingsController extends Controller
{
    public function index(Request $request) 
    {
        $buildings = Building::all();
        return view('building.index', compact('buildings'));
    }

    public function create()
    {
        return view('building.create');
    }

    public function store(Request $request)
    {
        $building = new Building();

        Log::info('Teste: ' . json_encode($request->toArray()));
        
        $building->address = request('address');
        $building->address_kitnet = request('address_kitnet');
        $building->address_house = request('address_house');
        $building->address_store = request('address_store');

        $building->save();

        return redirect()->route('building-list');

        
        
    }
}
