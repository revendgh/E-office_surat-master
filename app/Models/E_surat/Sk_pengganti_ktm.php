<?php

namespace App\Models\E_surat;
use App\Models\E_surat\Surat;
use Illuminate\Database\Eloquent\Model;

class Sk_pengganti_ktm extends Model
{
    protected $table = 'sk_pengganti_ktm';
    protected $fillable = ['id_surat', 'keperluan'];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }
}
