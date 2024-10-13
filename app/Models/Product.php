<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'prix_metre_carre', 'longeur', 'hauteur', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function featuredImage()
    {
        return $this->hasOne(ProductImage::class)->where('featured', true);
    }
    public function orders()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function productDetail()
    {
        return $this->belongsTo(ProductDetail::class, 'product_details_id');
    }
}