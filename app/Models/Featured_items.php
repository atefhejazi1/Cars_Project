<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Featured_items extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'spare_parts_department';
    protected $primarykey = 'id';
    protected $fillable = ['accessory_id', 'detergent_id', 'extrasse_id', 'oil_id', 'spare_parts_item_id'];

    public function accessory()
    {
        return $this->belongsTo(accessories::class, 'accessory_id');
    }
    public function detergent()
    {
        return $this->belongsTo(detergents::class, 'detergent_id');
    }
    public function extrasse()
    {
        return $this->belongsTo(extrasses::class, 'extrasse_id');
    }
    public function oil()
    {
        return $this->belongsTo(oils::class, 'oil_id');
    }
    public function sparPartsDepartments()
    {
        return $this->belongsTo(SparePartsDepartment::class, 'spare_parts_department_id');
    }
}
