<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory,SoftDeletes,Translatable;
    protected $guarded=[];


    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::creating(function ($blog){
            $blog->slug_az = Str::slug($blog->title_az).'-'.rand(1,99);
            $blog->slug_en = Str::slug($blog->title_en).'-'.rand(1,99);
            $blog->slug_ru = Str::slug($blog->title_ru).'-'.rand(1,99);
        });
    }


    public function getTitleAttribute()
    {
        return $this->attributes[$this->getTranslatedColumn('title')];
    }


    public function getDescriptionAttribute()
    {
        return $this->attributes[$this->getTranslatedColumn('description')];
    }

}
