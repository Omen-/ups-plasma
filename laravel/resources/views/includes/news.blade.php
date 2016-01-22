<div class="row news">
  <div class="col-xs-12">
    <div class="content-box">
      <div class="col-xs-12">
        <?php $i = 0; ?>
        @foreach($news as $n)
        <div class="item col-sm-6 col-md-4<?php if($i > 2) echo(' hidden-md hidden-lg'); ?>">
          <a href="{{ '/news/' .$n->id . '-' . sluggify($n->title) }}">
            <div class="overlay-box" style="background-image:url('/assets/img/news/{{ $n->image }}')">
              <div class="overlay">
              </div>
            </div>
          </a>
          <h3 style="height: 2em; overflow:hidden;">{{ $n->title }}</h3>
          <div class="hidden-lg hidden-md">
            <p style="height: 4em; overflow:hidden;">{{ trim(shortify($n->content, 200)) }}</p>
          </div>
        </div>
        <?php $i += 1; ?>
        @endforeach
      </div>
      <div class="col-xs-12">
      <?php $i = 0; ?>
      @foreach($news as $n)
      <div class="item col-md-4 hidden-xs hidden-sm<?php if($i > 2) echo(' hidden-md hidden-lg'); ?>">
        <p>{{ trim(shortify($n->content, 200)) }}</p>
      </div>
      <?php $i += 1; ?>
      @endforeach
      </div>
    </div>
  </div>
</div>
