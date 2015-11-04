<div class="row news">
  <div class="col-xs-12">
    <h2>News</h2>
    @foreach($news as $n)
    <div class="item col-xs-12 col-sm-4">
      <a href="/news/{{ $n->id . '-' . sluggify($n->title) }}"><img src="assets/img/news/{{ $n->image }}"></img></a>
      <h3>{{ $n->title }}</h3>
      <p>{{ $n->content }}</p>
    </div>
    @endforeach
  </div>
</div>
