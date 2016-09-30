<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Product extends Model implements SluggableInterface
{

    use SluggableTrait;

    /**
     * @var string
     */
    protected $table = 'products';
    protected $guarded = ['id'];

    /**
     * @var array
     */
    protected $fillable = ['id', 'slug', 'ispromo', 'is_published', 'name', 'price', 'details', 'short',
        'description', 'sku', 'upc', 'status', 'thumbnail', 'photo_album', 'pubished_at', 'video_url', 'lang',
        'manufacturer', 'category_id', 'quantity', 'subtitle', 'meta_title', 'meta_description', 'facebook_title',
        'google_plus_title', 'twitter_title', 'office_status', 'availability'];

    /**
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug'
    ];

    // public function setUrlAttribute($value)
    // {
    //     $this->attributes['url'] = $value;
    // }

    // public function getUrlAttribute()
    // {
    //     return 'shop/' . $this->attributes['slug'];
    // }

    /**
     * @var array
     */
    protected $casts = [
        'slug'              => 'string',
        'ispromo'           => 'boolean',
        'is_published'      => 'boolean',
        'availability'      => 'string',
        'manufacturer'      => 'string',
        'status'            => 'string',
        'office_status'     => 'string',
        'sku'               => 'string',
        'upc'               => 'string',
        'name'              => 'string',
        'subtitle'          => 'string',
        'details'           => 'string',
        'short'             => 'string',
        'description'       => 'string',
        'meta_title'        => 'string',
        'meta_description'  => 'string',
        'facebook_title'    => 'string',
        'google_plus_title' => 'string',
        'twitter_title'     => 'string',
        'price'             => 'integer',
        'quantity'          => 'integer',
        'video_url'         => 'string',
        'thumbnail'         => 'string',
        'photo_album'       => 'string'

    ];


    /**
     * @return mixed
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    /**
     * @return mixed
     */
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    /**
     * @return mixed
     */
    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    /**
     * @return mixed
     */
    public function photos()
    {
        return $this->hasMany(AlbumPhoto::class);
    }

    /**
     * @return mixed
     */
    public function options()
    {
        return $this->hasMany(Option::class);
    }

    /**
     * @return mixed
     */
    public function productVariants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    /**
     * @return mixed
     */
    public function productFeatures()
    {
        return $this->hasMany(ProductFeature::class);
    }
    
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function features()
    {
        return $this->hasMany(ProductFeature::class);
    }
}
