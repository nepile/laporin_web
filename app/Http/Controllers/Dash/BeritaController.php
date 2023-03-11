<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function v_berita()
    {
        $data = [
            'title' => 'Berita',
            'id_page' => 'dash-5',
        ];

        return view('dash.berita', $data);
    }
}
