<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Good extends Model
{
    use HasFactory;
    protected $translatable = ['image', 'content'];

    protected $guarded = [];

    public $dates = ['created_at', 'updated_at'];

    public function getImageAttribute($image)
    {
        if (Str::startsWith($image, 'http://') || Str::startsWith($image, 'https://')) {
            return asset(Voyager::image($image));
        }
        return Voyager::image($image);

    }

}
