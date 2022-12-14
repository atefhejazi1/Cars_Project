<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SparePartsItems extends Model
{
    use HasFactory;
    use SoftDeletes;




    protected $table = 'spare_parts_items';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'description','path_image','price','spare_parts_department_id','featured'];

     public function sparPartsDepartments()
    {
        return $this->belongsTo(SparePartsDepartment::class, 'spare_parts_department_id');
    }
}
