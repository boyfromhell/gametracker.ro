<?php

namespace App\Http\Livewire\Blog\Post;

use App\Models\Post;
use Livewire\Component;

class CommentCount extends Component
{
    public $comments;
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->comments = $post->comments->count() ?? 0;
    }

    public function updateCommentCount()
    {
        $this->comments = $this->post->comments->count() ?? 0;
    }

    public function render()
    {
        return view('livewire.blog.post.comment-count');
    }
}
