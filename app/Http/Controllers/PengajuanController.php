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
    /**
     * Display a listing of the resource.
     */
    public function indexuser()
    {
        $pengajuan = Pengajuan::all();
        return view('pengajuan-user',['pengajuanList'=>$pengajuan]);
    }
    public function indexstaff()
    {
        $pengajuan = Pengajuan::all();
        return view('pengajuan-staff',['pengajuanList'=>$pengajuan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
