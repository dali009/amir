<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Import;

class ImportController extends Controller
{
    public function printpicking()
    {
        $datas = Import::selectRaw('SUM(quantity_required) as quantity_required,uuid ,material,nomenclature,designation')
        ->groupBy('material')->get();
        return view('printpicking',compact('datas'));
    }
}
