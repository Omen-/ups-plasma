@extends('layouts.default')

@section('js')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/admin/page.js"></script>
@stop

@section('content')
<section class="content-section container">
  <div class="row">
    <div class="col-sm-offset-2 col-sm-8 col-xs-12">
      <h1 class="page-header">Liste des dossiers de pré-inscription</h1>
      @foreach($applications as $a)
      <div class="panel panel-default">
        <div class="panel-heading">Dossier d'inscription de {{ $a->first_name }} {{ $a->last_name }}</div>
        <div class="panel-body">
          <p><b>Nom :</b> {{ $a->first_name }}</p>
          <p><b>Prénom :</b> {{ $a->last_name }}</p>
          <p><b>Email :</b> <a href="mailto:{{ $a->email }}">{{ $a->email }}</a></p>
          <p><b>Fichiers joints :</b></p>
          <ul>
            @foreach($a->pdfs as $p)
            <li><a href="/admin/stored-pdf/show/{{ $p->id }}" target="_blank">{{ $p->title }}</a></li>
            @endforeach
          </ul>
          <a class="btn btn-danger" data-confirm="le dossier d'inscription de {{ $a->first_name . ' ' . $a->last_name }}" href="/admin/student-app/destroy/{{ $a->id }}"><i class="fa fa-fw fa-trash"></i></a>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</section>
@stop
