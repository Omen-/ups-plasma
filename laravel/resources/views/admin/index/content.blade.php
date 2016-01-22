@extends('layouts.default')

@section('js')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/admin/page.js"></script>
@stop

@section('content')
<section class="content-section container">
  <div class="row">
    <div class="col-sm-offset-2 col-sm-8 col-xs-12">
      <h1 class="page-header">Paramètres globaux</h1>
      <br>
      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        {!! implode('', $errors->all('<p><i class="fa fa-exclamation-circle"></i> :message</p>')) !!}
      </div>
      @endif
      <div class="panel panel-default">
        <div class="panel-heading">Bannière</div>
        <div class="panel-body">
          <form method="post" action="store" enctype="multipart/form-data">
            <p>Image actuelle :</p>
            <img class="img-responsive" src="/assets/img/banner.png" />
            <br>
            <label class="btn btn-default" for="upload-file-selector">
              <input style="display:none" id="upload-file-selector" name="front-image" type="file">
              <i class="fa fa-upload"></i> Choisir l'image
            </label>
            <br>
            <br>
            <div class="form-group">
              <label for="banner-title">Titre</label>
              <input type="banner-title" value="{{ get_content('front.title') }}" name="front-title" class="form-control" id="banner-title">
            </div>
            <button type="submit" class="btn btn-success">Mettre à jour</button>
            <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
          </form>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Calendriers</div>
        <div class="panel-body">
          <form method="post" action="store">
            <p>Les calendriers sont au format google calendar, pour pouvoir partager un calendrier, vous devez premièrement <a target="_blank" href="https://www.youtube.com/watch?v=XJncJK1OVWM">créer un calendrier publique</a>, puis <a target="_blank" href="https://www.youtube.com/watch?v=m_ph_hYT_SY">récuperer son ID</a>.</p>
            <br>
            <div class="form-group">
              <label for="banner-title">Callendrier des dates importantes :</label>
              <input type="banner-title" name="calendar-important" value="{{ get_content('calendar.important') }}" class="form-control" id="banner-title">
            </div>
            <button type="submit" class="btn btn-success">Modifier</button>
            <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
          </form>
        </div>
      </div>
    </div>
  </div>

</section>
@stop
