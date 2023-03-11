<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataLaporanController extends Controller
{
    public function v_dataLaporan()
    {
        $data = [
            'title' => 'Data Laporan',
            'id_page' => 'dash-2'
        ];

        return view('dash.data_laporan', $data);
    }
}
