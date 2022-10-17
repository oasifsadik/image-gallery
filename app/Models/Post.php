<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable =
    [
        'cat_id',
        'name',
        'short_description',
        'description',
        'thamnail',
        'cover',
        'image'
    ];


    public function Category()
    {
        return $this->belongsTo(Category::class, 'cat_id','id');
    }

}
