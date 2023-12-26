<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CommentUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        ];
        public function post(): BelongsTo
        {
            return $this->belongsTo(PostUser::class, 'post_id');
        }
        // public function post(): BelongsTo
        // {
        //     return $this->belongsTo(Post::class);
        // }
}
