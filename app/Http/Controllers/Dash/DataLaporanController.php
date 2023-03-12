<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\Laporan;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataLaporanController extends Controller
{
    public function v_dataLaporan()
    {
        $data = [
            'title' => 'Data Laporan',
            'id_page' => 'dash-2',
            'laporan' => Laporan::select(['foto_laporan', 'judul_laporan', 'status', 'jenis_laporan'])->get(),
        ];

        return view('dash.data_laporan', $data);
    }

    public function export_data(Request $request)
    {
        if ($request->semua) {
            $data = [
                'title' => 'Semua Laporan',
                'laporan' => DB::table('laporan')->join('users', 'laporan.id_masyarakat', '=', 'users.id')->get(),
            ];
        } elseif ($request->pengaduan) {
            $data = [
                'title' => 'Laporan Pengaduan',
                'laporan' => DB::table('laporan')->join('users', 'laporan.id_masyarakat', '=', 'users.id')->where('jenis_laporan', '=', 'pengaduan')->get()
            ];
        } elseif ($request->aspirasi) {
            $data = [
                'title' => 'Laporan Aspirasi',
                'laporan' => DB::table('laporan')->join('users', 'laporan.id_masyarakat', '=', 'users.id')->where('jenis_laporan', '=', 'aspirasi')->get()
            ];
        } elseif ($request->berhasil) {
            $data = [
                'title' => 'Laporan Aspirasi',
                'laporan' => DB::table('laporan')->join('users', 'laporan.id_masyarakat', '=', 'users.id')->where('status', '=', 'berhasil')->get()
            ];
        } elseif ($request->diproses) {
            $data = [
                'title' => 'Laporan Diproses',
                'laporan' => DB::table('laporan')->join('users', 'laporan.id_masyarakat', '=', 'users.id')->where('status', '=', 'diproses')->get()
            ];
        } elseif ($request->menunggu) {
            $data = [
                'title' => 'Laporan Menunggu',
                'laporan' => DB::table('laporan')->join('users', 'laporan.id_masyarakat', '=', 'users.id')->where('status', '=', 'menunggu')->get()
            ];
        } elseif ($request->ditolak) {
            $data = [
                'title' => 'Laporan Ditolak',
                'laporan' => DB::table('laporan')->join('users', 'laporan.id_masyarakat', '=', 'users.id')->where('status', '=', 'ditolak')->get()
            ];
        }

        $pdf = new Dompdf();
        $pdf->loadHTML(view('exports_template.pdf', $data));
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        return $pdf->stream($data['title'] . ' - ' . date('d M Y') . '.pdf');
    }
}
