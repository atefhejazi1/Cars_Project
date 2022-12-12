<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accessorie extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'accessories';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'description', 'path_image', 'price','featured'];



    public function accessories()
    {
       return $this->hasMany(accessorie::class);
    }
}
