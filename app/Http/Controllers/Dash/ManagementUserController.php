<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function v_masyarakat()
    {
        $data = [
            'title' => 'Management Masyarakat',
            'id_page' => 'dash-3',
        ];

        return view('dash.management_masyarakat', $data);
    }

    public function v_petugas()
    {
        $data = [
            'title' => 'Management Petugas',
            'id_page' => 'dash-4',
        ];

        return view('dash.management_petugas', $data);
    }
}
