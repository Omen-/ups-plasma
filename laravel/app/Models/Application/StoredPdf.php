<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class StoredPdf extends Model
{
  protected $table = 'stored_pdf';
  public $timestamps = false;

  protected $fillable = ['title'];
}
