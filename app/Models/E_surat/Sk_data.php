<?php

namespace App\Models\E_surat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\E_surat\Surat;
use Illuminate\Database\Eloquent\Model;

class Sk_data extends Model
{
    use HasFactory;

    protected $table = 'sk_data';
    protected $fillable = ['id_surat', 'tujuan', 'judul', 'contact_person', 'data'];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }

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
