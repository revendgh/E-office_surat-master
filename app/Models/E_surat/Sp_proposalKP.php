<?php

namespace App\Models\E_surat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sp_proposalKP extends Model
{
    use HasFactory;

    protected $table = 'sp_proposal_kp';
    protected $fillable = ['id_surat', 'tujuan_surat', 'tempat_kp', 'mahasiswa', 'lama_waktu', 'jangka_waktu'];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id=null)
    {
        return [
            'name' => 'required',
        ];
    }

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */

    /*
    |------------------------------------------------------------------------------------
    | Scopes
    |------------------------------------------------------------------------------------
    */

    /*
    |------------------------------------------------------------------------------------
    | Attributes
    |------------------------------------------------------------------------------------
    */
}
