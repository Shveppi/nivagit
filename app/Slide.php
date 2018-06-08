<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{

    protected $fillable = [
    	'title',
    	'description',
    	'url',
        'published_at',
        'active'
    ];

    public function setPublishedAtAttribute($date) {
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

    public function setActiveAttribute($active) {
        if($active == '0') {
            $this->attributes['active'] = null;

        } else {
            $this->attributes['active'] = 1;
        }
    }


}
