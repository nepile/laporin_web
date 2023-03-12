<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HandleApiController extends Controller
{
    public function getBerita()
    {
        $berita = Berita::all();
        return response()->json([
            'data' => $berita
        ]);
    }

    public function getLaporanPublik()
    {
        $laporan = DB::table('laporan')->where('visibilitas', '=', 'publik')->get();
        return response()->json([
            'data' => $laporan,
        ]);
    }
}
