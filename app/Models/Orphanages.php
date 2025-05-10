<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orphanages extends Model
{
    use HasFactory;

    protected $table = 'orphanages';

    public function children()
    {
        return $this->hasMany(Children::class, 'orphanage_id', 'id');
    }
}
