<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\Laporan;
use Illuminate\Http\Request;

class DataLaporanController extends Controller
{
    public function v_dataLaporan()
    {
        $data = [
            'title' => 'Data Laporan',
            'id_page' => 'dash-2',
            'laporan' => Laporan::select(['foto_laporan', 'judul_laporan', 'status', 'jenis_laporan'])->get(),
        ];

        return view('dash.data_laporan', $data);
    }
}
