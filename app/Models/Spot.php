<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;
    protected $table = 'spot';
    protected $primaryKey = 'id_spot';
    public $timestamps = false;
    protected $fillable = ['kelurahan','lokasi','no_pengajuan'];
    public function pengajuanditerima(){
        return $this->belongsTo(Pengajuan::class, 'no_pengajuan', 'no_pengajuan');
    }
    public function kelurahanspot(){
        return $this->belongsTo(Kelurahan::class, 'kelurahan', 'id_kelurahan');
    }
}