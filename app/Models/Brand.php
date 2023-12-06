<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'featured',
        'published',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function brandPicture()
    {
        return $this->hasOne(Image::class, 'ref_id')
            ->where('tag', 'brand')
            ->where('table', '=', $this->table);
    }

}
