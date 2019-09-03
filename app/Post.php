<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    //
    public function likes() {
        return $this->hasMany('App\Like', 'post_id');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id')->withTimestamps();
    }

    /**
     * Mutator to title attribute
     * Force to title to be lower case when saving it
     */
    public function setTitleAttribute($value) {
        $this->attributes['title'] = strtolower ($value);
    }

    /**
     * Accesor to title attribute
     * Force title to be uppercase when retrieving it 
     */
    public function getTitleAttribute($value) {
        return strtoupper($value);
    }



    
}


?>