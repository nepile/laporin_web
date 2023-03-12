<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HandleApiController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Login Success'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Invalid email or password'
            ], 401);
        }
    }

    public function getBerita()
    {
        $berita = Berita::all();
        return response()->json([
            'code' => 200,
            'data' => $berita
        ]);
    }

    public function getLaporanPublik()
    {
        $laporan = DB::table('laporan')->where('visibilitas', '=', 'publik')->get();
        return response()->json([
            'code' => 200,
            'data' => $laporan
        ]);
    }
}
