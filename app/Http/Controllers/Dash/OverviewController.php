<?php

namespace App\Http\Controllers\Dash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
