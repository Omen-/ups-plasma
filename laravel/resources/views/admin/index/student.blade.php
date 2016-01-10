@extends('layouts.default')

@section('js')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/admin/page.js"></script>
@stop

@section('content')
<section class="content-section container">
  <div class="row">
    <div class="col-md-offset-2 col-xs-8">
      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        {!! implode('', $errors->all('<p><i class="fa fa-exclamation-circle"></i> :message</p>')) !!}
      </div>
      @endif
      <h1 class="page-header">Gestion des étudiants</h1>
      <br>
      <div class="panel panel-default">
        <div class="panel-heading">Liste des étudiants</div>
        <div class="panel-body">

          <form method="post" action="update">
          <h3>Etudiants sans groupe</h3>
          <table class="table table-bordered">
            <thead>
              <th></th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Mail</th>
            </thead>
            @foreach($students as $s)
            @if($s->hasRole('student') && $s->trainings->isEmpty())
              <tr>
                <th class="vertical-align-middle" scope="row"><input type="checkbox" name="select-students[]" value="{{ $s->id }}" /></th>
                <td class="vertical-align-middle">{{ $s->first_name }}</td>
                <td class="vertical-align-middle">{{ $s->last_name }}</td>
                <td class="vertical-align-middle"><a href="mailto:{{ $s->email }}">{{ $s->email }}</a></td>
              </tr>
            @endif
            @endforeach
          </table>
          <br>
          @foreach($trainings as $t)
          <h3>{{ $t->title }}</h3>
          <table class="table table-bordered">
            <thead>
              <th></th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Mail</th>
            </thead>
            @foreach($t->users as $s)
            @if($s->hasRole('student'))
            <tr>
              <th class="vertical-align-middle" scope="row"><input type="checkbox" name="select-students[]" value="{{ $s->id }}" /></th>
              <td class="vertical-align-middle">{{ $s->first_name }}</td>
              <td class="vertical-align-middle">{{ $s->last_name }}</td>
              <td class="vertical-align-middle"><a href="mailto:{{ $s->email }}">{{ $s->email }}</a></td>
            </tr>
            @endif
            @endforeach
            </table>
            <br>
            @endforeach
            <hr class="sep">
            <div class="form-group">
              <label class="control-label">Nouvelle promotion</label>
              <select name="promotion" class="form-control">
                <option selected></option>
                @foreach($trainings as $t)
                <option value="{{ $t->id }}">{{ $t->title }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Effectuer les changements</button>
            </div>
            <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@stop
