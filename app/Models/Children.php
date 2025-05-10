<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;

    protected $table = 'children';

    protected $fillable = [
        'nama',
        'tempat_tgl_lahir',
        'umur',
        'jenis_kelamin',
        'jenjang',
        'kelas',
        'photo',
        'orphanage_id'
    ];

    public function orphanages()
    {
        return $this->belongsTo(Orphanages::class);
    }
}
