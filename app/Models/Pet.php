<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';
    protected $guarded = [];

    public function typepet()
    {
        return $this->belongsTo(TypePet::class, 'type_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeSearch($query, $val){
        return $query
        ->where('name', 'like', '%' .$val. '%')
        ->Orwhere('type_id', 'like', '%' .$val. '%')
        ->Orwhere('size', 'like', '%' .$val. '%')
        ->Orwhere('race', 'like', '%' .$val. '%')
        ->Orwhere('weight', 'like', '%' .$val. '%')
        ->Orwhere('colour', 'like', '%' .$val. '%');
    }
}
