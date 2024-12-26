<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $primaryKey = 'nidn';
    public $incrementing = false;
    protected $fillable = ['nidn', 'nama', 'tanggal_lahir', 'alamat', 'kode_makul'];
    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public function makul()
    {
        return $this->belongsTo(Makul::class, 'kode_makul', 'kode_makul');
    }
    
}
