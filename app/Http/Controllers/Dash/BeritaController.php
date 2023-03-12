<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function v_berita()
    {
        $data = [
            'title' => 'Berita',
            'id_page' => 'dash-5',
            'berita' => Berita::all(),
        ];

        return view('dash.berita', $data);
    }
}
