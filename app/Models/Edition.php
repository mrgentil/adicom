<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Edition extends Model
{
    use HasFactory;

    protected $translatable = [
        'title', 'date', 'place', 'subject',
        'slug', 'visitor', 'speakers_experts',
        'panels_keynotes','influencers','masterclass','side_event','exclusive_study',
        'nationalities_represented','day_of_meetings',
        'connections','formations','gust_vip','person_connected','interaction_live',
        'create_content','anniv_ceremonie','image1','image2'
    ];

    protected $guarded = [];

    public $dates = ['created_at', 'updated_at','date'];

    public function getImageAttribute($image)
    {
        if (Str::startsWith($image, 'http://') || Str::startsWith($image, 'https://')) {
            return asset(Voyager::image($image));
        }
        return Voyager::image($image);

    }

    public function getSlugLinkAttribute(): string
    {
        $edition = $this;
        return route('edition.show', $edition->id . '-' . $this->slug);
    }

    public function getFormattedCreatedAtAttribute(): string
    {
        $originalLocale = App::getLocale();
        App::setLocale('fr');

        $formattedDate = Carbon::parse($this->attributes['date'])->format('F d, Y');

        App::setLocale($originalLocale);

        return $formattedDate;
    }


}
