<?php

namespace App\Models;

use BeyondCode\Comments\Traits\HasComments;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use Carbon\Carbon;


class Post extends Model
{
    use HasFactory , HasComments;

    protected $translatable = ['title', 'seo_title', 'excerpt', 'body', 'slug', 'meta_description', 'meta_keywords'];

    const PUBLISHED = 'PUBLISHED';

    protected $guarded = [];

    public $dates = ['created_at', 'updated_at'];

    public function getImageAttribute($image)
    {
        if (Str::startsWith($image, 'http://') || Str::startsWith($image, 'https://')) {
            return asset(Voyager::image($image));
        }
        return Voyager::image($image);

    }

    public function getSlugLinkAttribute(): string
    {
        $post = $this;
        return route('media.show', $post->id . '-' . $this->slug);
    }

    public function getFormattedCreatedAtAttribute()
    {
        $originalLocale = App::getLocale();
        App::setLocale('fr');

        $formattedDate = Carbon::parse($this->attributes['created_at'])->format('F d, Y');

        App::setLocale($originalLocale);

        return $formattedDate;
    }

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->getKey();
        }

        parent::save();
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'author_id', 'id');
    }
    public function authorId(): BelongsTo
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'author_id', 'id');
    }

    /**
     * Scope a query to only published scopes.
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', '=', static::PUBLISHED);
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Voyager::modelClass('Category'));
    }
}
