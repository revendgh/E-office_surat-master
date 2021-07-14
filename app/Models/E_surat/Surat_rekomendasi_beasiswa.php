<?php

namespace App\Models\E_surat;
use App\Models\E_surat\Surat;
use Illuminate\Database\Eloquent\Model;

class Surat_rekomendasi_beasiswa extends Model
{
    protected $table = 'surat_rekomendasi_beasiswa';
    protected $fillable = ['id_surat', 'nama_beasiswa', 'semester', 'ipk', 'sks_lulus', 'ukt'];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }
}
