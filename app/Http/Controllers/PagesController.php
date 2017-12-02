<?php

namespace App\Http\Controllers;

use App\Models\InvManufacturer;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inventory(){
    	return view('inventory.index');
    }

    public function department(){
    	return view('inventory.build.department');
    }

    public function state(){
    	return view('inventory.build.state');
    }

    public function ownership(){
    	return view('inventory.build.ownership');
    }

    public function type(){
        $manufacturers = InvManufacturer::select('id', 'name')->get();
        return view('inventory.build.type', compact('manufacturers'));
    }

    public function manufacturer(){
        return view('inventory.build.manufacturer');
    }

    public function supplier(){
        return view('inventory.build.supplier');
    }
}
