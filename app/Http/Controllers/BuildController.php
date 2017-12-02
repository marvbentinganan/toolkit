<?php

namespace App\Http\Controllers;

use App\Models\InvManufacturer;
use Illuminate\Http\Request;
use App\Models\InvOwnership;
use App\Models\Departments;
use App\Models\InvSupplier;
use App\Models\InvState;
use App\Models\InvType;
use Redirect;
use Session;

class BuildController extends Controller
{
    public function createDepartment(Request $request){
    	Departments::create($request->all());
    }

    public function createState(Request $request){
    	InvState::create($request->all());
    }

    public function createOwnership(Request $request){
    	InvOwnership::create($request->all());
    }

    public function createItemType(Request $request){
        $type = InvType::create($request->all());
        $type->manufacturer()->attach($request->manufacturer);
    }

    public function createManufacturer(Request $request){
        InvManufacturer::create($request->all());
    }

    public function createSupplier(Request $request){
        InvSupplier::create($request->all());
    }

    public function data(){
    	$filter = $_GET['filter'];

    	if($filter == 'departments'){
    		$records = Departments::orderBy('name')->withTrashed()->get();
    		return view('inventory.build.data', compact('records', 'filter'));
    	}

    	if($filter == 'states'){
    		$records = InvState::orderBy('name')->withTrashed()->get();
    		return view('inventory.build.data', compact('records', 'filter'));
    	}

    	if($filter == 'ownerships'){
    		$records = InvOwnership::orderBy('name')->withTrashed()->get();
    		return view('inventory.build.data', compact('records', 'filter'));
    	}

        if($filter == 'types'){
            $records = InvType::orderBy('name')->withTrashed()->get();
            return view('inventory.build.data', compact('records', 'filter'));
        }

        if($filter == 'manufacturers'){
            $records = InvManufacturer::orderBy('name')->withTrashed()->get();
            return view('inventory.build.data', compact('records', 'filter'));
        }

        if($filter == 'suppliers'){
            $records = InvSupplier::orderBy('name')->withTrashed()->get();
            return view('inventory.build.data', compact('records', 'filter'));
        }
    }

    public function details(){
    	$filter = $_GET['filter'];
    	$id = $_GET['id'];

    	if($filter == 'departments'){
    		$department = Departments::findOrFail($id);
    		return view('inventory.build.detail', compact('department', 'filter'));
    	}

    	if($filter == 'states'){
    		$state = InvState::findOrFail($id);
    		return view('inventory.build.detail', compact('state', 'filter'));
    	}

    	if($filter == 'ownerships'){
    		$ownership = InvOwnership::findOrFail($id);
    		return view('inventory.build.detail', compact('ownership', 'filter'));
    	}

        if($filter == 'types'){
            $type = InvType::findOrFail($id);
            $manufacturers = InvManufacturer::select('id', 'name')->get();
            return view('inventory.build.detail', compact('type', 'filter', 'manufacturers'));
        }

        if($filter == 'manufacturers'){
            $manufacturer = InvManufacturer::findOrFail($id);
            return view('inventory.build.detail', compact('manufacturer', 'filter'));
        }

        if($filter == 'suppliers'){
            $supplier = InvSupplier::findOrFail($id);
            return view('inventory.build.detail', compact('supplier', 'filter'));
        }
    }

    public function update(Request $request){

    	if($request->filter == 'departments'){
    		$department = Departments::findOrFail($request->id);
    		$department->update([
    			'name' => $request->name,
    			]);
    		Session::flash('flash_message_success', 'Department Updated Successfully');
    		return Redirect::back();
    	}

    	if($request->filter == 'states'){
    		$department = InvState::findOrFail($request->id);
    		$department->update([
    			'name' => $request->name,
    			]);
    		Session::flash('flash_message_success', 'State Updated Successfully');
    		return Redirect::back();
    	}

    	if($request->filter == 'ownerships'){
    		$ownership = InvOwnership::findOrFail($request->id);
    		$ownership->update([
    			'name' => $request->name,
    			]);
    		Session::flash('flash_message_success', 'Ownership Updated Successfully');
    		return Redirect::back();
    	}

        if($request->filter == 'types'){
            $type = InvType::findOrFail($request->id);
            $type->update([
                'name' => $request->name,
                ]);
            $type->manufacturer()->sync($request->manufacturer);
            Session::flash('flash_message_success', 'Item Type Updated Successfully');
            return Redirect::back();
        }

        if($request->filter == 'manufacturers'){
            $manufacturer = InvManufacturer::findOrFail($request->id);
            $manufacturer->update([
                'name' => $request->name,
                'website' => $request->website,
                'email' => $request->email,
                'contact_number' => $request->contact_number,
                ]);
            Session::flash('flash_message_success', 'Manufacturer Updated Successfully');
            return Redirect::back();
        }

        if($request->filter == 'suppliers'){
            $supplier = InvSupplierr::findOrFail($request->id);
            $supplier->update([
                'name' => $request->name,
                'contact_number' => $request->contact_number,
                ]);
            Session::flash('flash_message_success', 'Suuplier Updated Successfully');
            return Redirect::back();
        }
    }

    public function delete(){
        $filter = $_GET['filter'];
        $id = $_GET['id'];

        if($filter == 'departments'){
            $department = Departments::findOrFail($id);
            $department->delete();
        }

        if($filter == 'states'){
            $state = InvState::findOrFail($id);
            $state->delete();
        }

        if($filter == 'ownerships'){
            $ownership = InvOwnership::findOrFail($id);
            $ownership->delete();
        }

        if($filter == 'types'){
            $type = InvType::findOrFail($id);
            $type->delete();
        }

        if($filter == 'manufacturers'){
            $manufacturer = InvManufacturer::findOrFail($id);
            $manufacturer->delete();
        }

        if($filter == 'suppliers'){
            $supplier = InvSupplier::findOrFail($id);
            $supplier->delete();
        }
    }

    public function restore(){
        $filter = $_GET['filter'];
        $id = $_GET['id'];

        if($filter == 'departments'){
            $department = Departments::onlyTrashed()->where('id', $id)->first();
            $department->restore();
        }

        if($filter == 'states'){
            $state = InvState::onlyTrashed()->where('id', $id)->first();
            $state->restore();
        }

        if($filter == 'ownerships'){
            $ownership = InvOwnership::onlyTrashed()->where('id', $id)->first();
            $ownership->restore();
        }

        if($filter == 'types'){
            $ownership = InvType::onlyTrashed()->where('id', $id)->first();
            $ownership->restore();
        }

        if($filter == 'manufacturers'){
            $manufacturer = InvManufacturer::onlyTrashed()->where('id', $id)->first();
            $manufacturer->restore();
        }

        if($filter == 'suppliers'){
            $supplier = InvSupplier::onlyTrashed()->where('id', $id)->first();
            $supplier->restore();
        }
    }
}
