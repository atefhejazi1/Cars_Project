<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SparePartsDepartment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'spare_parts_department';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'description',];


    public function sparPartsItems()
    {
       return $this->hasMany(sparPartsItems::class);
    }
}
