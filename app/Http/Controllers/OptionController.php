<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvManufacturer;
use App\Models\InvType;

class OptionController extends Controller
{
    public function getOptions(){
    	// $filter = $_GET['filter'];
    	$id = $_GET['id'];

    	// if('filter' == 'type'){
    		$type = InvType::findOrFail($id);
    		$options = $type->manufacturer()->get();
    		return view('components.dropdown', compact('filter', 'options'));
    	// }
    }
}
