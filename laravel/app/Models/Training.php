<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Services\GoogleCalendar;

class Training extends Model
{
  public $timestamps = false;

  protected $table = 'training';

  protected $fillable = ['id', 'title', 'calendar_id'];

  public function users()
  {
    return $this->belongsToMany('App\Models\Users\User', 'users_training_rel');
  }
}


?>
