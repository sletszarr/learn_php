<?php
/**
 * Created by PhpStorm.
 * User: DWP
 * Date: 12/15/16
 * Time: 7:02 PM
 */

class Post {

    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }

}

$posts = [
    new Post("My first post", 'BN', true),
    new Post("My second post", 'DWP', true),
    new Post("My third post", 'AW', false),
    new Post("My fourth post", 'BR', true)
];

$publishedPost = array_filter($posts, function ($post) {
    return $post->published;
});

$unpublishedPost = array_filter($posts, function ($post) {
    return !$post->published;
});


// you can define a third argument
// to act as the key
$authors = array_column($posts, 'title', 'author');

var_dump($authors);


