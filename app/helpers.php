<?php

function interest($name, $class)
{
  $slug = slug($name);
  $url = URL::route('posts', $slug);
  return <<<HTML
    <a href="$url">
      <span class="label $class">$name</span>
    </a>
HTML;
}

function interestClass($name)
{
  return interest($name, 'label-info');
}

function interestExample($name)
{
  return interest($name, 'label-success');
}

function slug($name)
{
  return str_replace(" ","-",strtolower($name));
}

?>