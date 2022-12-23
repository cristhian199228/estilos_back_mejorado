<?php

namespace App\Exports;

use App\Models\Promocion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PromocionExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    
    public function view(): View

    
    {
        return view('excel.promocion', [
            'promociones' => $this->data
        ]);
    }
   
}