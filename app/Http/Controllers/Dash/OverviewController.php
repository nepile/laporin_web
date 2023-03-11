<?php

namespace App\Http\Controllers\Dash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Laporan;
use App\Models\User;

class OverviewController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Overview',
            'id_page' => 'dash-1',
            'count_laporan' => Laporan::count(),
            'count_masyarakat' => User::where('role', '=', 'masyarakat')->count(),
            'count_petugas' => User::where('role', '=', 'petugas')->count(),
            'count_berita' => Berita::count(),
            'users' => User::where('role', '!=', 'admin')->get(),
        ];
        return view('dash.overview', $data);
    }
}
