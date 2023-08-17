<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Facades\Voyager;

class AwardGalery extends Model
{
    use HasFactory;
    protected $table = 'award_galeries';

    protected $fillable = ['images'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Voyager::modelClass('Category'));
    }
}
