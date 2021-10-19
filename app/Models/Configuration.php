<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Configuration extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('logo')
            ->width(50)
            ->height(50)
            ->withResponsiveImages();
    }
}
