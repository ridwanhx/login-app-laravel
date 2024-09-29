<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Pengguna extends Model implements AuthenticatableContract
{
    use HasFactory, Notifiable, Authenticatable;

    // inisialisasi kolom yang boleh diisi
    protected $fillable = [
        'username', 'password',
    ];

    // Sembunyikan password saat pengambilan data
    protected $hidden = [
        'password',
    ];

    // Jika tidak ingin menggunakan kolom created_at dan updated_at, set $timestamps ke false
    public $timestamps = true;

    // Set password otomatis di-hash saat diisi
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
