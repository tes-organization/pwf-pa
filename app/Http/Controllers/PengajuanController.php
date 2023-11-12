<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Spot;
use App\Models\Pengajuan;
use App\Models\Kelurahan;
use Carbon\Carbon;


class PengajuanController extends Controller
{
    public function indexuser()
    {
        $pengajuan = Pengajuan::all();
        return view('user/pengajuan-user',['pengajuanList'=>$pengajuan]);
    }

    public function indexstaff()
    {
        $pengajuan = Pengajuan::all();
        return view('staff/pengajuan-staff',['pengajuanList'=>$pengajuan]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {   $tanggal = Carbon::today()->toDateString();
        $status = 'Diproses';
        DB::table("pengajuan")->insert([
            'pengaju' => $request-> pengaju,
            'kelurahan' => $request-> kelurahan,
            'lokasi' => $request-> lokasi,
            'tgl_pengajuan'=>$tanggal,
            'status'=> $status,
        ]);
        return redirect('/pengajuan-user');
    }

    public function show(string $id)
    {
        //
    }

    public function updateterima(Request $request)
    {   
        DB::table('pengajuan')->where('no_pengajuan',$request->no_pengajuan)->update([
            'status' => "Diterima",
        ]);
        $updateterima = new \App\Http\Controllers\SpotController();
        return $updateterima->store();
        return redirect('/pengajuan-staff');
    }
    public function updatetolak(Request $request, string $id)
    {
        DB::table('pengajuan')->where('no_pengajuan',$request->no_pengajuan)->update([
            'status' => "Ditolak",
        ]);
        return redirect('/pengajuan-staff');
    }

    public function edit(string $no_pengajuan)
    {

    }

    public function destroy(string $id)
    {
        //
    }
}
