<?php

namespace App\Models\E_surat;
use App\Models\User;
use App\Models\E_surat\Mahasiswa;
use App\Models\E_surat\Sk_aktif_organisasi;
use App\Models\E_surat\Sk_aktif_studi;
use App\Models\E_surat\Sk_data;
use App\Models\E_surat\Sk_lulus;
use App\Models\E_surat\Sk_pengganti_ktm;
use App\Models\E_surat\Sk_pernah_studi;
use App\Models\E_surat\Sk_ta;
use App\Models\E_surat\Sp_KP;
use App\Models\E_surat\Sp_magang;
use App\Models\E_surat\Sp_mmta;
use App\Models\E_surat\Sp_proposalKP;
use App\Models\E_surat\Surat_peminjaman;
use App\Models\E_surat\Surat_penelitian;
use App\Models\E_surat\Surat_perjalanan;
use App\Models\E_surat\Surat_rekomendasi_beasiswa;
use Illuminate\Database\Eloquent\Model;
 
class Surat extends Model
{
    protected $table = 'surat';
    protected $fillable = ['no_surat', 'nama_surat', 'id_users', 'status_surat', 'keterangan_surat', 'file_surat' ];
    
    public function sk_aktif_organisasi(){
        return $this->hasOne(Sk_aktif_organisasi::class, 'id_surat');
    }
    public function sk_aktif_studi(){
        return $this->hasOne(Sk_aktif_studi::class, 'id_surat');
    }
    public function sk_data(){
        return $this->hasOne(Sk_data::class, 'id_surat');
    }
    public function sk_lulus(){
        return $this->hasOne(Sk_lulus::class, 'id_surat');
    }
    public function sk_pengganti_ktm(){
        return $this->hasOne(Sk_pengganti_ktm::class, 'id_surat');
    }
    public function sk_pernah_studi(){
        return $this->hasOne(Sk_pernah_studi::class, 'id_surat');
    }
    public function sk_ta(){
        return $this->hasOne(Sk_ta::class, 'id_surat');
    }
    public function sp_kp(){
        return $this->hasOne(Sp_KP::class, 'id_surat');
    }
    public function sp_magang(){
        return $this->hasOne(Sp_magang::class, 'id_surat');
    }
    public function sp_mmta(){
        return $this->hasOne(Sp_mmta::class, 'id_surat');
    }
    public function sp_proposalKP(){
        return $this->hasOne(Sp_proposalKP::class, 'id_surat');
    }
    public function surat_peminjaman(){
        return $this->hasOne(Surat_peminjaman::class, 'id_surat');
    }
    public function surat_penelitian(){
        return $this->hasOne(Surat_penelitian::class, 'id_surat');
    }
    public function surat_perjalanan(){
        return $this->hasOne(Surat_perjalanan::class, 'id_surat');
    }
    public function surat_rekomendasi_beasiswa(){
        return $this->hasOne(Surat_rekomendasi_beasiswa::class, 'id_surat');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_users');
    }



   
}
