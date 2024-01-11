<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $table = 'works';
    protected $fillable = [
        'title',
        'slug',
        'category'

    ];


    public function worksPicture()
    {
        return $this->hasMany(Image::class, 'ref_id')
        ->where('tag', 'work')
        ->where('table', '=', $this->table)   ;
    }
}
