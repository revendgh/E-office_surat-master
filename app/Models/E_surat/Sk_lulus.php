<?php

namespace App\Models\E_surat;
use App\Models\E_surat\Surat;
use Illuminate\Database\Eloquent\Model;

class Sk_lulus extends Model
{
    protected $table = 'sk_lulus';
    protected $fillable = ['id_surat', 'akreditasi_institut', 'keperluan', 'tanggal_yudisium'];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }
}
