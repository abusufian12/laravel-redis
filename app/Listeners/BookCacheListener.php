<?php

namespace App\Listeners;

use App\Events\BookCreated;
// use App\Events\BookUpdated;
// use App\Events\BookDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Redis;
use App\Models\Book;

class BookCacheListener
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
     * @param  BookCreated  $event
     * @return void
     */
    public function handle(BookCreated $event)
    {
        $books = Book::get();
        // dd($books);
        Redis::set('all_book', $books);
    }

    // public function handle(Event $event)
    // {
    //     if ($event instanceof NewMessageSent) {
    //         dd('message sent');
    //     } else if ($event instanceof MessageReplied) {
    //         dd('message replied');
    //     } else if ($event instanceof MessageForwarded) {
    //     dd('message forwarded');
    //     }
    // }
}
