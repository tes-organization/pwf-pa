<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Spot;
use App\Models\Pengajuan;
use App\Models\Kelurahan;

class SpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexguest()
    {
        $spot = Spot::all();
        return view('guest/spot-guest',['spotList'=>$spot]);
    }
    public function indexuser()
    {
        $spot = Spot::all();
        return view('user/spot-user',['spotList'=>$spot]);
    }
    public function indexstaff()
    {
        $spot = Spot::all();
        return view('staff/spot-staff',['spotList'=>$spot]);
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
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
