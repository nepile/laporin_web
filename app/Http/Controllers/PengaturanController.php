<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function v_pengaturan()
    {
        $data = [
            'title' => 'Pengaturan',
            'id_page' => 'dash-6'
        ];

        return view('dash.pengaturan', $data);
    }
}
