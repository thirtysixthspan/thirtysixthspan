<div id='{{{ $post->slug }}}' class='post'>
  <div class='story'>
    <div class='row-fluid'>
      @if ($post->slide_embed != null || $post->video_embed != null)
        <div class='sidebar span3'>
      @else
        <div class='sidebar span2'>
      @endif
        <div class='container-fluid'>
          <div class='post-date'>
            {{{ date('l', strtotime($post->date)) }}}<br>
            {{{ date('F jS', strtotime($post->date)) }}}<br>
            {{{ date('Y', strtotime($post->date)) }}}<br>
          </div>
        </div>
        <div class='container-fluid'>
          <div class='post-tags'>
            @foreach ($post->tags as $tag)
              @if ($tag->slug != 'all')
                <a class='post-tag' href="{{ URL::route('posts', $tag->slug) }}">
                  {{{ $tag->name }}}
                </a>
              @endif
            @endforeach
          </div>
        </div>
        <div class='container-fluid'>
          <div class='post-slides'>
            @if ($post->slide_url != null)
              <a href="{{ $post->slide_url }}">Slides for this post</a>
            @endif
            @if ($post->slide_embed != null)
              {{ $post->slide_embed }}
            @endif
          </div>
        </div>
        <div class='container-fluid'>
          <div class='post-video'>
            @if ($post->slide_url != null)
              <a href="{{ $post->video_url }}">Video for this post</a>
            @endif
            @if ($post->video_embed != null)
              {{ $post->video_embed }}
            @endif
          </div>
        </div>

      </div>
      <div class='mainbar'>
        <div class='container-fluid'>
          <div class='post-title'>
            <a href='{{{ URL::route('post', $post->slug) }}}'>
              {{{ $post->title }}}
            </a>
          </div>
          <div class='post-body language-ruby'>
            {{ $post->body }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
