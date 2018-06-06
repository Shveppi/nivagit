<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{

    protected $fillable = [
    	'title',
    	'description',
    	'url'
    ];

  /*  protected $dates = [

     'published_at'

    ];*/

    //protected $dateFormat = 'Y-m-d H:i';

    public function setPublishedAtAttribute($date) {
    	$this->attributes['published_at'] = Carbon::parse($date);
    }



}
