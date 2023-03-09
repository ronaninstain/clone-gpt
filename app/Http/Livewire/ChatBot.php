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
        $this->chats[] = ['user' => 'human', 'request' => $this->input];

        $result = OpenAI::completions()->create(['model' => 'davinci', 'prompt' => $this->input]);

        $this->chats[] = ['user' => 'ai', 'response' => data_get($result->toArray(), "choices.0.text")];

        $this->input = "";
    }
}
