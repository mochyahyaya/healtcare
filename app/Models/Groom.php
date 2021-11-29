<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groom extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pets()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cages()
    {
        return $this->belongsTo(Cage::class, 'cage_id');
    }

    public function scopeSearch($query, $val){
        return $query
        ->where('type', 'like', '%' .$val. '%')
        ->Orwhere('size', 'like', '%' .$val. '%')
        ->Orwhere('service', 'like', '%'. $val. '%')
        ->Orwhere('address', 'like', '%' .$val. '%')
        ->Orwhere('status', 'like', '%' .$val. '%');
    }
}
