<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Post;

class NewPostMail extends Mailable
{
    use Queueable, SerializesModels;

    // Post instance
    private $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('site@example.com')
                    //->view('mail.new-post-mail')
                    ->markdown('mail.new-post-mail')
                    ->with([
                        'title' => $this->post->title
                    ]);
    }
}
