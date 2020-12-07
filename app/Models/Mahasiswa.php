<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    public $incrementing = false;
    protected $primaryKey = 'NIM';
    protected $keyType = 'string';
    protected $fillable = [
        'NIM','nama'
    ];
    public function matkul() {
        return $this->hasMany('App\Models\Matkul');
    }
}
