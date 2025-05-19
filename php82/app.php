<?php

require_once 'vendor/autoload.php';

enum Status
{
    case DRAFT;
    case PUBLISHED;
    case ARCHIVED;
}

class BlogPost
{
    public function __construct(
        public Status $status,
    ) {}
}

$post = new BlogPost(Status::DRAFT);

var_dump($post->status); // enum(Status::DRAFT)
var_dump($post->status->name); // string "DRAFT"
var_dump($post->status::cases()); // array

