<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HandleApiController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if ($request->email != false && $request->password != false) {
            if (Auth::attempt($credentials)) {
                $user = User::where('email', '=', $request->email)->first();
                return response()->json([
                    'status' => 200,
                    'message' => 'Berhasil Login',
                    'user' => $user,
                ]);
            } else {
                return response()->json([
                    'status' => 401,
                    'message' => 'Username atau password salah!'
                ]);
            }
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Pastikan input tidak boleh kosong!'
            ]);
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
