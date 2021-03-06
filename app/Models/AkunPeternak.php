<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunPeternak extends Model
{
    use HasFactory;

    protected $guarded = [
        'id_peternak'
    ];

    public function databurung()
    {
        return $this->hasMany(DataBurung::class,'id_peternak');
    }
}
