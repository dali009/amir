<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Import;
use App\Imports\pickingImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function printpicking()
    {
        $datas = Import::selectRaw('SUM(quantity_required) as quantity_required,uuid ,material,nomenclature,designation')
        ->groupBy('material')->get();
        return view('picking.printpicking',compact('datas'));
    }

    public function import(Request $request)
    {
        // dd('test');
        $request->validate([
            'file' => 'required|mimes:xls,xlsx,csv|max:2048',
        ]);
        // dd(request()->file('file'));
        Excel::import(new PickingImport,  request()->file('file'));
        $inputs=Import::select ('record','created_at')
        ->groupBy('record')
        ->groupBy('created_at')
        ->get();
        return redirect()->route('picking')->with('success','File imported successfully');
    }


    public function index()
    {
        $inputs=Import::select ('record','created_at')
                        ->groupBy('record')
                        ->groupBy('created_at')
                        ->get();

        return view('picking.import',compact('inputs'));
    }
    public function show($record)
    {
        $datas = Import::selectRaw('SUM(quantity_required) as quantity_required,uuid ,material,nomenclature,designation,id')
        ->groupBy('material')->get();
        // dd($datas->count());
        return view('picking.printpicking',compact('datas'));
    }
    public function destroy($record)
    {

            $input = Import::where('record',$record);
          $input->delete($record);
        return redirect('/picking')->with('deleteInput', 'Input has been deleted succesfuly!');
    }
}
