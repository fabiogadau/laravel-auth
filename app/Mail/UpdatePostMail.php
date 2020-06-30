<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Post;

class UpdatePostMail extends Mailable
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
                    ->subject('Post updated')
                    //->view('mail.new-post-mail')
                    ->markdown('mail.update-post-mail')
                    ->with([
                        'title' => $this->post->title
                    ]);
    }
}
