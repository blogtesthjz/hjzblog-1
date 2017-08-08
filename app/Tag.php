<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tag', 'title', 'subtitle', 'page_image', 'meta_description','reverse_direction',
    ];

    /**
     * 定义文章与标签之间多对多关联关系
     *
     * @return BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'post_tag_pivot');
    }
    public function hah()
    {
        /**
        *   刚刚创建分支， 
         *  此时在3955分支下
         * new branch
        */

    }

}
