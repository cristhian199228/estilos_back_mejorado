<?php

namespace App\Exports;

use App\Models\Promocion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PromocionExportLegales  implements FromView
{

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('excel.promocion_legales', [
            'promociones' => $this->data
        ]);
    }
}