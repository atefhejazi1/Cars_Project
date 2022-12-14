<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detergent extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'detergents';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'description', 'path_image', 'price', 'featured'];

    public function detergents()
    {
        return $this->hasMany(detergent::class);
    }

}
