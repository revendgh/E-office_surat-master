<?php

namespace App\Models\E_surat;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nim',];
 
    public function prodi() {
        return $this->belongsTo('App\Models\E_surat\Prodi', 'id_prodi');
    }

    public function users() {
        return $this->belongsTo('App\User', 'id_users');
    }

    
}