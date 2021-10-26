<?php

namespace App;

enum Status: string
{
    case DRAFT = 'draft';
    case ENDED = 'ended';
    case PUBLISHED = 'published';
    case ARCHIVED = 'archived';


    public function color(): string
    {
        return match ($this) {
            Status::DRAFT, self::ENDED => 'grey',
            Status::PUBLISHED => 'green',
            Status::ARCHIVED => 'red',
        };
    }
}