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
        // $updateterima = new \App\Http\Controllers\SpotController();
        // return $updateterima->store();

        // $terimapengajuan = Pengajuan::find($request->no_pengajuan);
        // if ($terimapengajuan) {
        //     // Membuat record baru dalam tabel spot
        //     $spot = new Spot();
        //     $spot->kelurahan = $terimapengajuan->kelurahan; // Sesuaikan dengan nama kolom dan atribut yang sesuai
        //     $spot->lokasi = $terimapengajuan->lokasi;
        // }

        $pengajuan = Pengajuan::find($request->no_pengajuan);
        if ($pengajuan) {
            // Membuat record baru dalam tabel spot
            $spot = new Spot();
            $spot->kelurahan = $pengajuan->kelurahan; // Sesuaikan dengan nama kolom dan atribut yang sesuai
            $spot->lokasi = $pengajuan->lokasi;
            $spot->no_pengajuan = $request->no_pengajuan;
            $spot->save();

            return redirect('/pengajuan-staff')->with('success', 'Spot berhasil dibuat dari Pengajuan.');
        } else {
            return redirect('/pengajuan-staff')->back()->with('error', 'Pengajuan tidak ditemukan.');
            // return redirect()->back()->with('error', 'Pengajuan tidak ditemukan.');
        }
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
