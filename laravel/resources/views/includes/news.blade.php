<div class="row news">
  <div class="col-xs-12">
    <div class="content-box">
      <div class="col-xs-12">
        @foreach($news as $n)
        <div class="item col-md-4">
          <a href="{{ '/news/' .$n->id . '-' . sluggify($n->title) }}">
            <div class="overlay-box" style="background-image:url('/assets/img/news/{{ $n->image }}')">
              <div class="overlay">

              </div>
            </div>
          </a>
          <h3>{{ $n->title }}</h3>
          <div class="hidden-lg hidden-md">
            <p>{{ trim(shortify($n->content, 300)) }}</p>
            <p><a href="{{ '/news/' .$n->id . '-' . sluggify($n->title) }}">✚</a></p>
          </div>
        </div>
        @endforeach
      </div>
      <div class="col-xs-12">
      @foreach($news as $n)
      <div class="item col-md-4 hidden-xs hidden-sm">
        <p>{{ trim(shortify($n->content, 300)) }}</p>
        <p><a href="{{ '/news/' .$n->id . '-' . sluggify($n->title) }}">✚</a></p>
      </div>
      @endforeach
      </div>
    </div>
  </div>
</div>
