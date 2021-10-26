<?php

use App\{Status, Post};

require_once 'vendor/autoload.php';

dump(Status::from('draft')->color());
dump(Status::from('ended')->color());


$reflection = new ReflectionEnum(Status::from('draft'));
dump($reflection->getCases());
dump($reflection->getCase('DRAFT'));
dump($reflection->getProperties());

//$post = new Post(Status::PUBLISHED);
//dump($post);
//
//dump(Status::from('published'));
//
//dump(Status::cases());
//
//dump(enum_exists(Status::class));
//dump(enum_exists(Post::class));





