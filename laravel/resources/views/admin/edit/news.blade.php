@extends('layouts.default')

@section('js')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/admin/page.js"></script>
@stop

@section('css')
<link href="/assets/css/news.css" rel="stylesheet"></link>
@stop


@section('content')
<section class="content-section container">
  <div class="row">
    <div class="col-sm-offset-2 col-sm-8 col-xs-12">

      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        {!! implode('', $errors->all('<p><i class="fa fa-exclamation-circle"></i> :message</p>')) !!}
      </div>
      @endif

      <form method="post" action="/admin/news/update/{{ $currentEditedNews->id }}" enctype="multipart/form-data">
        <div class="form-group">
          <label for="input-title">Titre de la news</label>
          <input type="text" name="title" value="{{ $currentEditedNews->title }}" class="form-control" id="input-title" placeholder="Titre">
        </div>
        <div class="form-group">
          <label class="control-label">Image de la news (Optionnel)</label>
          <input id="input-1" name="image" type="file">
        </div>
        <div class="form-group">
          <textarea name="content" id="editor">
            {!! $currentEditedNews->content !!}
          </textarea>
        </div>
        <div class="form-group">
          <a onclick="showPagePreview()" class="btn btn-primary"><i class="fa fa-eye"></i> Preview</a>
          <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
        </div>
        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
      </form>
    </div>
  </div>

</section>
<br>
<section id="news-preview" class="container news-container content-section">
  <div class="row">
    <h2 id="news-preview-title" class="news-title">{{ $currentEditedNews->title }}</h2>
    <div class="news-title-separator"></div>
  </div>
  <div class="row">
    <div class="col-md-offset-2 col-md-8 col-xs-12">
      <div class="news-content">
        <div id="preview">
        </div>
        <p class="news-author">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</p>
      </div>
    </div>
  </div>
</section>
@stop
