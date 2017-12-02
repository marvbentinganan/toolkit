<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvManufacturer;
use App\Models\InvOwnership;
use App\Models\InvSupplier;
use App\Models\Departments;
use App\Models\InvState;
use App\Models\InvType;
use App\Models\InvItem;

class ItemController extends Controller
{
    public function index(){
    	$states = InvState::orderBy('name')->get();
    	$manufacturers = InvManufacturer::orderBy('name')->get();
    	$suppliers = InvSupplier::orderBy('name')->get();
    	$ownerships = InvOwnership::orderBy('name')->get();
    	$types = InvType::orderBy('name')->get();
        $departments = Departments::orderBy('name')->get();
        $storage = ['128 MB', '256 MB', '500 MB', '1 GB', '2 GB', '4 GB', '80 GB', '120 GB', '160 GB', '320 GB', '500 GB', '1 TB', '2 TB', '4 TB'];
    	return view('inventory.item.index', compact('states', 'types', 'ownerships', 'suppliers', 'manufacturers', 'departments', 'storage'));
    }

    public function store(Request $request){
    	$item = InvItem::create($request->all());
    }
}
