<?php

use Symfony\Component\Yaml\Yaml;

class PostsSeeder extends Seeder {

  public function run()
  {

    $post_files = Yaml::parse('./app/database/posts/posts.yaml');

    foreach ($post_files as $post_file) {
      $post = PostsSeeder::loadPostYaml($post_file);
      PostsSeeder::publishPost($post);
    }

  }

  private function loadPostYaml($post_file)
  {
    return Yaml::parse("./app/database/posts/$post_file");
  }

  private function publishPost($post)
  {
    $tags = $post['tags'];
    unset($post['tags']);

    if (array_key_exists('markdown', $post)) {
      $post['body'] = PostsSeeder::generateMarkdownFromBody($post);
    }

    $postRecord = PostsSeeder::findOrCreatePost($post);
    PostsSeeder::addTagsToPost($tags, $postRecord);
  }

  private function findOrCreatePost($post)
  {
    $title = $post['title'];
    $slug = $post['slug'];
    printf("Publishing $title\n");
    $postRecord = Post::findOrCreate($slug);
    $postRecord->update($post);
    $postRecord->save();
    return $postRecord;
  }

  private function addTagsToPost($tags, $post)
  {
    $tags[] = 'all';
    foreach ($tags as $tag) {
      $record = Tag::findOrCreate($tag);
      $existing = $post->tags()->where('name', '=', $record->name)->count();
      if ($existing == 0) {
        $post->tags()->save($record);
      }
    }
  }

  private function generateMarkdownFromBody($post)
  {
    printf("Generating HTML from markdown\n");
    $parsedown = new Parsedown();
    return $parsedown->text($post['markdown']);
  }

}