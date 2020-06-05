<?php

namespace App\Http\Livewire\Blog\Post;

use App\Models\Post;
use Livewire\Component;

class ViewCount extends Component
{
    public $views;
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->views = $post->view_count ?? 0;
    }

    public function updateViewCount()
    {
        $this->views = $this->post->view_count ?? 0;
    }

    public function render()
    {
        return view('livewire.blog.post.view-count');
    }
}
