<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuan';
    protected $primaryKey = 'no_pengajuan';
    protected $fillable = ['kelurahan','lokasi'];
    public function kelurahanpengajuan(){
        return $this->belongsTo(Kelurahan::class, 'kelurahan', 'id_kelurahan');
    }
}
