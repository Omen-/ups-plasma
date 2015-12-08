@extends('layouts.default')

@section('js')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/admin/page.js"></script>
@stop

@section('content')
<section class="content-section container">
  <div class="row">
    <div class="col-md-offset-2 col-xs-8">
      <form method="post" action="/admin/news/update/{{ $currentEditedNews->id }}">
        <div class="form-group">
          <label for="title">Titre de la news</label>
          <input type="text" name="title" value="{{ $currentEditedNews->title }}" class="form-control" id="title" placeholder="Titre">
        </div>
        <div class="form-group">
          <label class="control-label">Image de la news (Optionnel)</label>
          <input id="input-1" name="image" type="file" class="file">
        </div>
        <div class="form-group">
          <textarea name="content" id="editor">
            {!! $currentEditedNews->content !!}
          </textarea>
        </div>
        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
        <div class="form-group">
          <a onclick="showPagePreview()" class="btn btn-primary"><i class="fa fa-eye"></i> Preview</a>
          <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
        </div>
      </form>
    </div>
  </div>

</section>
<br>
<section class="content-section container">
  <div class="row">
    <div id="preview" class="col-md-offset-2 col-xs-8">
    </div>
  </div>
</section>
@stop
