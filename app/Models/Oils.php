<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Oils extends Model
{
    use HasFactory;
    use SoftDeletes;
    

    protected $table = 'oils';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'description', 'path_image','price','featured'];

    public function oil()
    {
        return $this->hasMany(oils::class);
    }
}
