<?php

namespace App\Models\E_surat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_peminjaman extends Model
{
    use HasFactory;

    protected $table = 'surat_peminjaman';
    protected $fillable = ['id_surat', 'tujuan_surat', 'tanggal_peminjaman', 'waktu_peminjaman', 'tujuan', 'objek'];

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
