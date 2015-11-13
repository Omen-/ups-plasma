<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = 'news_category';

  protected $fillable = ['title', 'color'];

  public function news()
  {
    return $this->belongsToMany('App\Models\News\Category', 'news_category_rel');
  }
}

?>
