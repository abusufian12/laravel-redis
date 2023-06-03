<?php

namespace App\Listeners;

use App\Events\BookUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Book;

class BookUpdatedListener
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
     * @param  BookUpdated  $event
     * @return void
     */
    public function handle(BookUpdated $event)
    {
        $books = Book::get();
        // dd($books);
        Redis::set('all_book', $books);
    }
}
