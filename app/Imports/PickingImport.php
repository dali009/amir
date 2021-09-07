<?php

namespace App\Imports;

use App\Models\Import;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PickingImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public $record=null;
    public function __construct()
    {
        $lastrecord=Import::select('record')->orderby('record','DESC')->first(); // To show last record in DB
        if($lastrecord== null){
            $this->record=1; // if table is empty
        }
        else{
            $this->record=$lastrecord->record+1;
        }
    }
    //skip the first row
    public function startRow():int
    {
            return 2;
    }
    public function model(array $row)
    {
        // dd($row[12]);
        return new Import([
            'uuid'=> $row[0],
            'post'=>$row[1],
            'material'=>$row[2],
            'production_store'=>$row[3],
            'order'=>$row[4],
            'nomenclature'=>$row[5],
            'designation'=>$row[6],
            'quantity_required'=>$row[7],
            'quantity_confirmed'=>$row[8],
            'quantity_withdraw'=>$row[9],
            'quantity_missing'=>$row[10],
            'unit'=>$row[11],
            'requirement_date'=>date('Y-m-d',(($row[12]-25569)*86400)),
            'post_type'=>$row[13],
            'division'=>$row[14],
            'store'=>$row[15],
            'purchase_document'=>$row[16],
            'deleted_post'=>$row[17],
            'record'=>$this->record,
            'printed'=>0,
        ]);
    }
}
