<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function v_masyarakat()
    {
        $data = [
            'title' => 'Management Masyarakat',
            'id_page' => 'dash-3',
            'masyarakat' => User::where('role', '=', 'masyarakat')->get()
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

    public function hapus_user($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('warning', 'User berhasil di hapus!');
    }
}
