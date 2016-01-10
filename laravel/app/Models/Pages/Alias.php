<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
  public $timestamps = false;

  protected $table = 'alias';

  protected $fillable = ['id', 'alias', 'page_id'];

  public function page()
  {
    return $this->hasOne('App\Models\Pages\Page');
  }
}
