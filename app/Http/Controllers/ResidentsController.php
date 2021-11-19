<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Resident;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\ViewName;

class ResidentsController extends Controller
{

    public function index(Request $request)
    {  
        $search = $request->get('search');
        $residents = Resident::where('name', 'like', '%'.$search.'%')->get();
        return view('resident.index', compact('residents'));
    }


    public function create(Request $request)
    {
        $buildings = Building::all();
        return view('resident.create', compact('buildings'));
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

    
    public function store(Request $request) 
    { 
        $resident = new Resident();

        $resident->name = request('resident_name');
        $resident->phone = request('resident_tel');
        $resident->info_address_local = request('info_address_local');
        $resident->apart_number = request('apart_number');
        $resident->light_number = request('light_number');
        $resident->rent_price = request('rent_price');
        $resident->due_date = request('due_date');
        $resident->building_id = request('building_adrress');
        
        $resident->save();

        return redirect()->route('resident-list');
        
    }

}
