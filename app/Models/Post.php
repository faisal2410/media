<?php

namespace App\Models;


use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

   protected $guarded = [];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
            ->singleFile();
        $this->addMediaCollection('downloads')
            ->singleFile();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);


    }
}
