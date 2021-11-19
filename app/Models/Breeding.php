<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breeding extends Model
{
    use HasFactory;

    public $table = 'breedings';

    public $guarded = [''];

    public function pets()
    {
        $this->belongsTo(Pet::class);
    }
}
