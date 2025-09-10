<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAssignment extends Model
{
    use HasFactory;

    protected $fillable = ['type_assignments_type', 'type_assignments_id', 'my_bonus_field', 'type_id'];

    public function type()
    {
        return $this->belongsTo(ProductType::class, 'type_id');
    }

    public function assignable()
    {
        return $this->morphTo(__FUNCTION__, 'type_assignments_type', 'type_assignments_id');
    }
}
