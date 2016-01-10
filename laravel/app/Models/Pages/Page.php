<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
  protected $table = 'page';

  protected $fillable = ['id', 'title', 'content'];

  public function alias()
  {
    return $this->belongsTo('App\Models\Pages\Alias', 'page_id');
  }
}
