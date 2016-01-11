@extends('layouts.default')

@section('js')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/admin/page.js"></script>
@stop

@section('content')
<section class="content-section container">
  <div class="row">
    <div class="col-xs-offset-2 col-xs-8">
      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        {!! implode('', $errors->all('<p><i class="fa fa-exclamation-circle"></i> :message</p>')) !!}
      </div>
      @endif
      <form method="post" action="/admin/training/update/{{ $currentEditedTraining->id }}">
        <div class="form-group">
          <label for="title">Nom de la promotion</label>
          <input type="text" value="{{ $currentEditedTraining->title }}" name="title" class="form-control" id="title" placeholder="Titre">
        </div>
        @include('includes.help.calendar')
        <div class="form-group">
          <label for="calendar">Calendrier</label>
          <input type="text" value="{{ $currentEditedTraining->calendar_id }}" name="calendar" class="form-control" id="title" placeholder="Calendrier">
        </div>
        <div class="form-group">
          <button onclick="" type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
        </div>
        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
      </form>
    </div>
    </div>
  </div>

</section>
@stop
