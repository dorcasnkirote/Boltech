<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'created_by',
        'updated_by',
    ];

    /**
     * Define relationship with Subtopic
     */
    public function subtopics()
    {
        return $this->hasMany(Subtopic::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
