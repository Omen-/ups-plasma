<div class="row news">
  <div class="col-xs-12">
    <h2>News</h2>
    <div class="col-xs-12">
      @foreach($news as $n)
      <div class="item col-xs-12 col-sm-4">
        <a href="{{ '/news/' .$n->id . '-' . sluggify($n->title) }}"><img src="/assets/img/news/{{ $n->image }}" alt="{{ $n->image_desc }}" /></a>
        <h3>{{ $n->title }}</h3>
      </div>
      @endforeach
    </div>
    <div class="col-xs-12">
    @foreach($news as $n)
    <div class="item col-xs-12 col-sm-4">
      <p>{{ trim(shortify($n->content, 300)) }}</p>
      <p><a href="{{ '/news/' .$n->id . '-' . sluggify($n->title) }}">✚</a></p>
    </div>
    @endforeach
    </div>
  </div>
</div>
