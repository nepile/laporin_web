<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Overview',
            'id_page' => 'dash-1',
        ];
        return view('dash.overview', $data);
    }
}
