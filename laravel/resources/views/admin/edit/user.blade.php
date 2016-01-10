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
      <form method="post" action="/admin/user/update/{{ $currentEditedUser->id }}">
        <div class="form-group">
          <label>Role</label>
          <label class="control-label"></label>
          <select name="role" class="form-control">
            @foreach($roles as $r)
            <option value="{{ $r->id }}" {{ ($r->id == $currentEditedUser->roles()->first()->id ? 'selected' : '') }}>{{ $r->title }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="banner-title">Email</label>
          <input name="email" value="{{ $currentEditedUser->email }}" class="form-control" id="user-email">
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
          <input value="{{ $currentEditedUser->last_name }}" name="lastname" class="form-control" id="user-lastname">
        </div>
        <div class="form-group">
          <label for="user-firstname">Prénom</label>
          <input value="{{ $currentEditedUser->first_name }}" name="firstname" class="form-control" id="user-firstname">
        </div>

        <button type="submit" class="btn btn-success">Modifier</button>
        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
      </form>
    </div>
    </div>
  </div>

</section>
@stop
