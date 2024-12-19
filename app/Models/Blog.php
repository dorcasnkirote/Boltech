<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image', 'author','category_id'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

  


    public function category()
    {
        return $this->belongsTo(InformationCategory::class);
    }


}
