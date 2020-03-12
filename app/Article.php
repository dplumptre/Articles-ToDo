<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'title_slug','content'
    ];

    public function users()
    {
      return   $this->belongsTo('App\User','id','user_id');
    }
}
