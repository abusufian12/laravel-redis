<?php

namespace App\Listeners;

use App\Events\BookDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Book;

class BookDeletedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  BookDeleted  $event
     * @return void
     */
    public function handle(BookDeleted $event)
    {
        $books = Book::get();
        // dd($books);
        Redis::set('all_book', $books);
    }
}
