<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $table = 'news';

  protected $fillable = ['author_id', 'title', 'image', 'image_desc', 'content'];

  public function author()
  {
    return $this->belongsTo('App\Models\Users\User');
  }

  public function categories()
  {
    return $this->belongsToMany('App\Models\News\Category', 'news_category_rel');
  }
}

?>
