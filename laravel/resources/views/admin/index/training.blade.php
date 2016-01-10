@extends('layouts.default')

@section('js')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/admin/page.js"></script>
@stop

@section('content')
<section class="content-section container">
  <div class="row">
    <div class="col-md-offset-2 col-xs-8">
      <h1 class="page-header">Gestion des promotions</h1>
      <br>
      <div class="panel panel-default">
        <div class="panel-heading">Liste des promotions</div>
        <div class="panel-body">
          <table class="table">
            <thead>
              <th>#</th>
              <th>Titre</th>
              <th>Nombre de membres</th>
              <th>Actions</th>
            </thead>
            @foreach($trainings as $t)
            <tr>
              <th class="vertical-align-middle" scope="row">{{ $t->id }}</th>
              <td class="vertical-align-middle">{{ $t->title }}</td>
              <td class="vertical-align-middle">{{ $t->users()->count() }}</td>
              <td>
                <a class="btn btn-primary" href="/admin/training/edit/{{ $t->id }}"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger" data-confirm="la promotion {{ $t->title }}" href="/admin/training/destroy/{{ $t->id }}"><i class="fa fa-trash"></i></a>

              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Création d'une nouvelle promotion</div>
        <div class="panel-body">
          @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            {!! implode('', $errors->all('<p><i class="fa fa-exclamation-circle"></i> :message</p>')) !!}
          </div>
          @endif
          <form method="post" action="store">
            <div class="form-group">
              <label for="banner-title">Nom de la promotion</label>
              <input type="banner-title" value="" name="title" class="form-control" id="banner-title">
            </div>
            <div class="form-group">
              @include('includes.help.calendar')
              <label for="banner-subtitle">ID Calendrier</label>
              <input type="banner-subtitle" value="" name="calendar" class="form-control" id="banner-subtitle">
            </div>
            <button type="submit" class="btn btn-success">Créer</button>
            <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
          </form>
        </div>
      </div>
    </div>
  </div>

</section>

@stop
