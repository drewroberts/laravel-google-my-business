<?php

namespace DrewRoberts\Media\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasCreator;
use Tipoff\Support\Traits\HasPackageFactory;
use Tipoff\Support\Traits\HasUpdater;

class Image extends BaseModel
{
    use HasCreator, HasUpdater, HasPackageFactory;

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($image) {
            if (empty($image->width)) {
                $data = getimagesize($image->getUrlAttribute());
                $image->width = $data[0];
                $image->height = $data[1];
            }
        });
    }

    public function getUrlAttribute()
    {
        $cloudName = config('filesystem.disks.cloudinary.cloud_name');

        return 'https://res.cloudinary.com/' . $cloudName . '/' . $this->filename;
    }

    public function videos()
    {
        return $this->hasMany(app('video'));
    }
}
