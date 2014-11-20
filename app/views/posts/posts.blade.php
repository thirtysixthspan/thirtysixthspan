<h2>{{{ $activeTag->name }}} Posts</h2>
<ul>
  @foreach ($posts as $post)
    <li>
      <a href="#{{{ $post->slug }}}">
        {{{ $post->title }}}
      </a>
    </li>
  @endforeach
</ul>
