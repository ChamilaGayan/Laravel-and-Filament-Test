<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'external_url'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function types()
    {
        return $this->morphToMany(ProductType::class, 'type_assignments');
    }
}
