<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTable;


class DataTablefetch extends Controller
{
    

public function get_data(){

	return DataTable::paginate(5);
}


}
