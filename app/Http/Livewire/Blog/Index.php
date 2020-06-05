<?php

namespace App\Http\Livewire\Blog;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Post::where('is_published', true)->get();
    }

    public function render()
    {
        return view('livewire.blog.index');
    }
}
