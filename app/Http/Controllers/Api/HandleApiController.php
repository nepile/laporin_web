<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class HandleApiController extends Controller
{
    public function getBerita()
    {
        $berita = Berita::all();
        return response([
            'data' => $berita
        ]);
    }
}
