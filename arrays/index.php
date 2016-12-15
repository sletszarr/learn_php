<?php
/**
 * Created by PhpStorm.
 * User: DWP
 * Date: 12/15/16
 * Time: 7:02 PM
 */

class Post {

    protected $title;

    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }

}

$posts = [
    new Post("My first post", true),
    new Post("My second post", true),
    new Post("My third post", false),
    new Post("My fourth post", true)
];

$publishedPost = array_filter($posts, function ($post) {
    return $post->published;
});

$unpublishedPost = array_filter($posts, function ($post) {
    return !$post->published;
});

// array_column can't access non-public property
$titles = array_column($posts, 'title');

var_dump($titles);


