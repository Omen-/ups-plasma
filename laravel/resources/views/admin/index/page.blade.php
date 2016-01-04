@extends('layouts.default')

@section('js')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/admin/page.js"></script>
@stop

@section('content')
<section class="content-section container">
  <div class="row">
    <div class="col-md-offset-2 col-xs-8">
      <h1 class="page-header">Gestion des pages</h1>
      <br>
      <table class="table">
        <thead>
          <th>#</th>
          <th>Titre</th>
          <th>Dernière édition</th>
          <th>Actions</th>
        </thead>
        @foreach($pages as $page)
        <tr>
          <th class="vertical-align-middle" scope="row">{{ $page->id }}</th>
          <td class="vertical-align-middle">{{ $page->title }}</td>
          <td class="vertical-align-middle">{{ $page->updated_at }}</td>
          <td>
            <a class="btn btn-success" href="/page/{{ $page->id . '-' . sluggify($page->title) }}"><i class="fa fa-eye"></i></a>
            <a class="btn btn-primary" href="/admin/page/edit/{{ $page->id }}"><i class="fa fa-pencil"></i></a>
            <a class="btn btn-danger" href="/admin/page/destroy/{{ $page->id }}"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>

</section>
@stop
