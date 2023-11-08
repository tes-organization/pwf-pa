<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuan';
    protected $primaryKey = 'no_pengajuan';
    protected $fillable = ['pengaju','kelurahan','lokasi','status'];
    public function kelurahanpengajuan(){
        return $this->belongsTo(Kelurahan::class, 'kelurahan', 'id_kelurahan');
    }
    public function terimapengajuan(){
        return $this->hasOne(Pengajuan::class,'no_pengajuan','no_pengajuan');
    }
}
