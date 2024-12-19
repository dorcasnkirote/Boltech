<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subtopic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'topic_id',
        'name',
        'description',
        'created_by',
        'updated_by',
    ];

    /**
     * Define relationship with Topic
     */
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }


    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Define relationship with Response
     */

}
