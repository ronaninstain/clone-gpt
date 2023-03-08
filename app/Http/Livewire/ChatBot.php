<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class ChatBot extends Component
{
    public array $chats = [];
    public string $input = '';

    public function render(): View
    {
        return view('livewire.chat-bot');
    }

    public function submit()
    {
        $this->input = 'xxxx';
    }
}
