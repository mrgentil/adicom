<?php

namespace App\Models;

use BeyondCode\Comments\Contracts\Commentator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BeyondCode\Comments\Comment as BaseComment;


class Comment extends Model implements Commentator
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
