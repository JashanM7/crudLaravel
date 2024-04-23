<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llibreria extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "lloc"
    ];

    public function llibres(){
        return $this->hasMany(Llibre::class);
    }

    




}
