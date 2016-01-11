<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class StudentApplication extends Model
{
  protected $table = 'student_application';

  protected $fillable = ['first_name', 'last_name', 'email'];

  public function pdfs()
  {
    return $this->belongsToMany('App\Models\Application\StoredPdf', 'application_pdf_rel', 'application_id', 'pdf_id');
  }
}

?>
