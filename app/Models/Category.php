<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use App\Interfaces\ModelInterface as ModelInterface;

/**
 * Class Category.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class Category extends Model implements ModelInterface, SluggableInterface
{
    use SluggableTrait;

    public $table = 'categories';
    public $timestamps = false;
    protected $fillable = ['title', 'slug', 'section_id', 'meta_description', 'name', 'lang'];
    protected $appends = ['url'];

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to' => 'slug',
    );



    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return 'category/'.$this->attributes['slug'];
    }

       public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    /**
     * Relationship with the product model.
     * @return    Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }

    public function subcats()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function section()
    {
        return $this->belongsTo( Section::class);
    }
}
