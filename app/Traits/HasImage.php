<?php

namespace App\Traits;

use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait HasImage
{
    use InteractsWithMedia;

    /**
     * get image from polymporfic realationship
     *
     */
    public function thumbnail()
    {
        return optional($this->getMedia())->getFullUrl('thumbnail') ?? '';
    }

    /**
     * Get Original Image.
     */
    public function image()
    {
        return optional($this->getMedia()->first())->getFullUrl() ?? '';
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumbnail')
            ->width(150)
            ->height(150);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main')->singleFile();
    }
}
