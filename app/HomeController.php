<?php

namespace App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Sampaikan laporan pengaduan dan aspirasi bersama kami',
            'id_page' => 'app-1',
        ];

        return view('app.home', $data);
    }
}
