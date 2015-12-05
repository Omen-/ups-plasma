<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
  protected $table = 'page';

  protected $fillable = ['id', 'title', 'content'];
}

?>
