<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Olke extends Model
{
    use HasFactory,SoftDeletes,Translatable;
    protected $guarded=[];


    public function getTitleAttribute()
    {
        return $this->attributes[$this->getTranslatedColumn('title')];
    }


    public function getDescriptionAttribute()
    {
        return $this->attributes[$this->getTranslatedColumn('description')];
    }

}
