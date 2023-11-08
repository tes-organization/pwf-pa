<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;
    protected $table = 'pengajuan';
    protected $primaryKey = 'no_pengajuan';
    protected $fillable = ['pengaju','kelurahan','lokasi','status'];
    public function pengajuanditerima(){
        return $this->belongsTo(Pengajuan::class, 'no_pengajuan', 'no_pengajuan');
    }
}