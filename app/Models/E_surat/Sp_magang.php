<?php

namespace App\Models\E_surat;
use App\Models\E_surat\Surat;
use Illuminate\Database\Eloquent\Model;

class Sp_magang extends Model
{
    protected $table = 'sp_magang';
    protected $fillable = ['id_surat', 'tujuan', 'tempat', 'dosen_pembimbing', 'tanggal_mulai', 'tanggal_selesai'];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }
}
