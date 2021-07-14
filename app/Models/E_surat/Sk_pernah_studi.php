<?php

namespace App\Models\E_surat;
use App\Models\E_surat\Surat;
use Illuminate\Database\Eloquent\Model;

class Sk_pernah_studi extends Model
{
    protected $table = 'sk_pernah_studi';
    protected $fillable = ['id_surat', 'keperluan', 'angkatan', 'semester_awal', 'semester_akhir', 'tahun_akademik_awal', 'tahun_akademik_akhir'];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }
}
