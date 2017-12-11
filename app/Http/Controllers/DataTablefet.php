<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTable;
use Yajra\DataTables\Facades\DataTables;

class DataTablefet extends Controller
{
	public function get_data(){
	  $users = DataTable::select(['id','claim_reference_number_assigned_by_datarx','plan_type']);

return Datatables::of($users)->addColumn('action', function ($user) {
    return '<button type="button" onclick="editdata('.$user->id.');" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</button>';
})->make(true);




	}


	public function get_data_pag(){
	  $data = DataTable::paginate(10);
	  return view('pagination',compact('data'));
	}


	public function just_buttons(){
	  $data = DataTable::paginate(10);
	  return view('pagination',compact('data'));
	}


	
}
