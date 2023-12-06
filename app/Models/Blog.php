<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable=[
        'name',
        'slug',
        'title',
        'price',
        'location',
        'description',
        'aditional_info',
        'benifits',
        'featured',
        'published',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',

    ];
  
    public function blogPicture()
    {
        return $this->hasMany(Image::class, 'ref_id')
        ->where('tag', 'blog')
        ->where('table', '=', $this->table)   ;
    }

}
