<?php

namespace App\Traits;

use Spatie\MediaLibrary\InteractsWithMedia;

trait HasFile
{
    use InteractsWithMedia;

    /**
     * Get file from polymporfic realationship
     *
     * @return string
     */
    public function fileUrl()
    {
        return optional($this->getMedia()->first())->getFullUrl() ?? '';
    }

    public function getFilePath()
    {
        return optional($this->getMedia()->first())->getPath() ?? '';
    }

    /**
     *  Getter to get file url instead of using the method.
     * 
     * @return string
     */
    public function getFileUrlAttribute()
    {
        return $this->fileUrl();
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main')->singleFile();
    }
}
