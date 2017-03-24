<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Post extends Model
{
//    在db:seed过程中，ModelFactory负责产生假数据，因为设置了slug是唯一的，所以该post的作用就是检测唯一性
    protected $dates = ['published_at'];

    public function setTitleAttribute($value)
    {

        $this->attributes['title'] = $value;

        if (! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }

    }
}
