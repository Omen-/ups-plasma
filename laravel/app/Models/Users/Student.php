<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name'];

}
