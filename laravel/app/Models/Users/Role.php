<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public $timestamps = false;

  protected $table = 'users_roles';

  protected $fillable = ['title', 'color'];

  public function users()
  {
    return $this->belongsToMany('App\Models\Users\User', 'users_roles_rel');
  }
}


?>
