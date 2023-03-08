<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Sampaikan laporan pengaduan dan aspirasi bersama kami',
            'id_page' => 'lp-1'
        ];

        return view('landing_page.home', $data);
    }
}
