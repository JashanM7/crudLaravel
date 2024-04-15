<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llibre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titol',
        'autor',
        'anypub',
        'editorial',
        'isbn',
        'categoria',
    ];

    //1 a m relacions

    /*


    a class Mp extends Model

    public function ufs(){
        return $this->hasMany(Uf::class);
    }

    a class Uf extends Model

    public function mp(){
        return $this->belongsTo(Mp::class);
    }


    */

   

}
