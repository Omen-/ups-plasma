@extends('layouts.default')

@section('js')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/admin/page.js"></script>
@stop

@section('content')
<section class="content-section container">
  <div class="row">
    <div class="col-md-offset-2 col-xs-8">
      <form method="post" action="/admin/page/update/{{ $currentEditedPage->id }}">
        <div class="form-group">
          <label for="title">Titre de la page</label>
          <input type="text" value="{{ $currentEditedPage->title }}" name="title" class="form-control" id="title" placeholder="Titre">
        </div>
        <div class="form-group">
          <textarea name="content" id="editor">
            {!! $currentEditedPage->content !!}
          </textarea>
        </div>
        <div class="form-group">
          <a onclick="showPagePreview()" class="btn btn-primary"><i class="fa fa-eye"></i> Preview</a>
          <button onclick="" type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
        </div>
        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
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
