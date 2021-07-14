<?php

namespace App\Models\E_surat;
use App\Models\E_surat\Surat;
use Illuminate\Database\Eloquent\Model;

class Sk_aktif_organisasi extends Model
{
    protected $table = 'sk_aktif_organisasi';
    protected $fillable = ['id_surat', 'keperluan', 'semester', 'tahun_akademik', 'organisasi', 'jabatan'];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }
}
