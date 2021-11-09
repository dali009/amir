<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Import;

class KittingController extends Controller
{
    public function kitting()
    {
        return view('kitting.kitting');
    }

    public function search(Request $request)
    {
        $input=$request->id;
        $update=Import::where('id',$input)->first();
        $update->printed=1;
        $update->save();
        $materials=Import::where('id',$input)
                           ->get();
        return view('kitting.printKitting',compact('materials'));
        // return redirect()->route('printKitting',compact('materials'))->with('fail','Material not found');
    }
    public function missing(){
        $materials=Import::where('printed',0)->get();
        return view('missing',compact('materials'));
    }
}
