<div class='post-tags'>
  <h2>Post Tags</h2>
  @foreach ($tags as $tag)
    <a class='post-tag' href="{{ URL::route('posts', $tag->slug) }}">
      {{{ $tag->name }}}
    </a>
  @endforeach
</div>