<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = 'kelurahan';
    protected $primaryKey = 'id_kelurahan';
    public function kelurahanpengajuan(){
        return $this->hasMany(Pengajuan::class,'id_kelurahan','kelurahan');
    }
    public function kelurahanspot(){
        return $this->hasMany(Spot::class,'id_kelurahan','kelurahan');
    }
}
