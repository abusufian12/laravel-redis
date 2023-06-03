<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;

use App\Events\BookCreated;
use App\Events\BookUpdated;
use App\Events\BookDeleted;

class Book extends Model
{
    protected $fillable = ['book_name', 'writer', 'description'];

    protected $dispatcheEvents = [
        'created' => BookCreated::class,
        'updated' => BookUpdated::class,
        'deleted' => BookDeleted::class,
    ];
}
