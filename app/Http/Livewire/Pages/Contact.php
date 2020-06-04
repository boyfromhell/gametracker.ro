<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $message;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:6',
            'email' => 'required|email',
            'message' => 'required|string|min:20'
        ]);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'message' => 'required|string|min:20'
        ]);

        session()->flash('message', 'We try to reach out to you asap!');
    }

    public function render()
    {
        return view('livewire.pages.contact');
    }
}
