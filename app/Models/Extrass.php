<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Extrass extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'extrasses';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'description', 'path_image','price','featured'];


     public function extrasses()
    {
        return $this->hasMany(extrass::class);
    }
}


