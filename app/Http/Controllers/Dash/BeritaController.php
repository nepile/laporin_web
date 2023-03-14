<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function v_berita()
    {
        $data = [
            'title' => 'Berita',
            'id_page' => 'dash-5',
            'berita' => Berita::all(),
        ];

        return view('dash.berita', $data);
    }

    public function tambah_berita(Request $request)
    {
        $this->validate($request, [
            'topik_berita' => 'required',
            'asset_berita' => 'required',
            'deskripsi_berita' => 'required',
        ], [
            'topik_berita.required' => 'Topik Berita wajib diisi.',
            'asset_berita.required' => 'Asset Berita wajib diisi.',
            'deskripsi_berita.required' => 'Deskripsi Berita wajib diisi.',
        ]);
        $data = new Berita();
        date_default_timezone_set('Asia/Jakarta');

        $data->topik_berita = $request->topik_berita;
        if ($request->hasFile('asset_berita')) {
            $request->file('asset_berita')->move('asset_berita/', $request->file('asset_berita')->getClientOriginalName());
            $data->asset_berita = $request->file('asset_berita')->getClientOriginalName();
        }
        $data->deskripsi_berita = $request->deskripsi_berita;
        $data->tgl_publish = date('Y-m-d', strtotime('now'));

        $data->save();

        return redirect()->back()->with('success', 'Berhasil mempublikasi berita! Berita sekarang dapat dilihat oleh masyarakat luas.');
    }
}
