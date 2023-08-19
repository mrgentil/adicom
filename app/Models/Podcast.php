<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Podcast extends Model
{
    use HasFactory;
    protected $translatable = ['title', 'seo_title', 'link','slug', 'meta_description', 'meta_keywords','image'];



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
        $podcast = $this;
        return route('podcast.show', $podcast->id . '-' . $this->slug);
    }

    public function getFormattedCreatedAtAttribute()
    {
        $originalLocale = App::getLocale();
        App::setLocale('fr');

        $formattedDate = Carbon::parse($this->attributes['created_at'])->format('F d, Y');

        App::setLocale($originalLocale);

        return $formattedDate;
    }


    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Voyager::modelClass('Category'));
    }
}
