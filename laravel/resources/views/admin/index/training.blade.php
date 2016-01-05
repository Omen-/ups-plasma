@extends('layouts.default')

@section('js')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/admin/page.js"></script>
@stop

@section('content')
<section class="content-section container">
  <div class="row">
    <div class="col-md-offset-2 col-xs-8">
      <h1 class="page-header">Gestion des formations</h1>
      <br>
      <table class="table">
        <thead>
          <th>#</th>
          <th>Titre</th>
          <th>Calendrier</th>
          <th>Nombre d'étudiants</th>
        </thead>
        @foreach($trainings as $t)
        <tr>
          <th class="vertical-align-middle" scope="row">{{ $t->id }}</th>
          <td class="vertical-align-middle">{{ $t->title }}</td>
          <td class="vertical-align-middle"><a class="btn btn-success" href=""><i class="fa fa-eye"></i></a></td>
          <td class="vertical-align-middle">{{ $t->users()->count() }}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>

</section>
@stop
