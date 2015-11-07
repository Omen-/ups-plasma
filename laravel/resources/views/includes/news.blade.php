<div class="row news">
  <div class="col-xs-12">
    <h2>News</h2>
    @foreach($news as $n)
    @section('news-link', '/news/' .$n->id . '-' . sluggify($n->title))
    <div class="item col-xs-12 col-sm-4">
      <a href="@yield('news-link')"><img src="/assets/img/news/{{ $n->image }}" alt="{{ $n->image_desc }}"></img></a>
      <h3>{{ $n->title }}</h3>
      <p>{{ shortify($n->content, 580) }} <a href="@yield('news-link')">...</a></p>
    </div>
    @endforeach
  </div>
</div>
