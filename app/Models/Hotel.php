<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['nom' , 'description1', 'description2', 'caracteristique','lieu', 'image'];
    public function images(){
        return $this->hasMany(ImagesHotel::class);
    }
}
