@extends('layouts.default')

@section('js')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/admin/page.js"></script>
@stop

@section('content')
<section class="content-section container">
  <div class="row">
    <div class="col-md-offset-2 col-xs-8">
      <h1 class="page-header">Gestion des utilisateurs</h1>
      <br>
      <div class="panel panel-default">
        <div class="panel-heading">Liste des promotions</div>
        <div class="panel-body">
          <table class="table">
            <thead>
              <th>#</th>
              <th>Email</th>
              <th>Role</th>
              <th>Actions</th>
            </thead>
            @foreach($users as $u)
            <tr>
              <th class="vertical-align-middle" scope="row">{{ $u->id }}</th>
              <td class="vertical-align-middle"><a href="mailto:{{ $u->email }}">{{ $u->email }}</a></td>
              <td class="vertical-align-middle">{{ $u->roles()->first()->title }}</td>
              <td>
                <a class="btn btn-primary" href="/admin/user/edit/{{ $u->id }}"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger" data-confirm="l'utilisateur {{ $u->first_name . ' ' . $u->last_name }}" href="/admin/user/destroy/{{ $u->id }}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Création d'un nouvel utilisateur</div>
        <div class="panel-body">
          @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            {!! implode('', $errors->all('<p><i class="fa fa-exclamation-circle"></i> :message</p>')) !!}
          </div>
          @endif
          <form method="post" action="store">
            <div class="form-group">
              <label>Role</label>
              <label class="control-label"></label>
              <select name="role" class="form-control">
                <option selected></option>
                @foreach($roles as $r)
                <option value="{{ $r->id }}">{{ $r->title }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="banner-title">Email</label>
              <input name="email" class="form-control" id="user-email">
            </div>
            <div class="form-group">
              <label for="user-password">Mot de passe</label>
              <div class="input-group">
                <span class="input-group-btn">
                  <button id="generatePassword" class="btn btn-default" type="button"><i class="fa fa-random"></i></button>
                </span>
                <input name="password" class="form-control" id="user-password">
              </div>
            </div>
            <div class="form-group">
              <label for="user-lastname">Nom</label>
              <input value="" name="lastname" class="form-control" id="user-lastname">
            </div>
            <div class="form-group">
              <label for="user-firstname">Prénom</label>
              <input value="" name="firstname" class="form-control" id="user-firstname">
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
