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

      <form method="post" action="/admin/news/store" enctype="multipart/form-data">
        <div class="form-group">
          <label for="title">Titre de la news</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Titre" value="{{Request::old('title')}}">
        </div>
        <div class="form-group">
          <label class="control-label">Image de la news</label>
          <input id="input-1" accept="image/*" name="image" type="file">
        </div>
        <div class="form-group">
          <textarea name="content" id="editor">
            {!! Request::old('content') !!}
          </textarea>
        </div>
        <div class="form-group">
          <label class="control-label">Catégorie</label>
          <select name="category" class="form-control">
            <option selected></option>
            @foreach($categories as $c)
            <option value="{{ $c->id }}">{{ ucfirst($c->title) }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label class="control-label">Nouvelle catégorie</label>
          <input type="text" placeholder="Optionnel" name="newCategory" class="form-control" value="{{Request::old('newCategory')}}">
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
