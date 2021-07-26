<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\E_surat\Surat;
use App\Models\Mahasiswa;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'bio', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $common = [
            'email'    => "required|email|unique:users,email,$id",
            'password' => 'nullable|confirmed',
            'avatar' => 'image',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /*
    |------------------------------------------------------------------------------------
    | Attributes
    |------------------------------------------------------------------------------------
    */
    public function getAvatarAttribute($value)
    {
        if (!$value) {
            return 'https://placehold.it/160x160';
        }

        return config('variables.avatar.public').$value;
    }
    public function setAvatarAttribute($photo)
    {
        $this->attributes['avatar'] = move_file($photo, 'avatar');
    }
    public function mahasiswa(){
        return $this->hasOne(Mahasiswa::class, 'id_users');
    }
    public function tendik_jurusan(){
        return $this->hasOne(Tendik_jurusan::class, 'id_users');
    }
    public function tendik_akademik(){
        return $this->hasOne(Tendik_akademik::class, 'id_users');
    }
    public function unit_kerja(){
        return $this->hasOne(Unit_kerja::class, 'id_users');
    }
    public function arsiparis(){
        return $this->hasOne(Arsiparis::class, 'id_users');
    }
    public function sekretariat(){
        return $this->hasOne(Sekretariat::class, 'id_users');
    }
    public function wakil_rektor(){
        return $this->hasOne(Wakil_rektor::class, 'id_users');
    }
    public function rektor(){
        return $this->hasOne(Rektor::class, 'id_users');
    }
    public function surat(){
        return $this->hasMany(Surat::class, 'id_users');
    }
    public function pengaturan(){
        return $this->hasOne(Pengaturan::class, 'id_users');
    }

}
