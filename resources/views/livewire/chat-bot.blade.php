<div class="h-full w-full">
    <div class="h-full overflow-y-scroll space-y-4 bg-stone-100 rounded-xl px-3">
        @foreach ($chats as $chat)
            @if ($chat['user'] === 'ai')
                <div class="flex justify-start">
                    @if ($chat['type'] === 'image')
                        <img src="{{ $chat['response'] }}" alt="image"
                            class="max-w-xs bg-orange-200 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl p-3">
                    @else
                        <p class="max-w-xs bg-orange-200 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl p-3">
                            {!! $chat['response'] !!}
                        </p>
                    @endif
                </div>
            @else
                <div class="flex justify-end">
                    <p class="max-w-xs bg-indigo-100 rounded-tr-3xl rounded-tl-3xl rounded-bl-3xl p-3">
                        {{ $chat['request'] }}
                    </p>
                </div>
            @endif
        @endforeach
    </div>

    <div class="flex items-center bg-white overflow-hidden p-1 rounded-2xl">
        <label for="" class="flex-1">
            <input wire:model="input" type="text" class="bg-white p-3 w-full rounded-2xl"
                placeholder="type something..." />
        </label>
        <label for="" class="mx-2">
            <select wire:model="type" class="rounded-xl py-3">
                <option value="chat">Chat</option>
                <option value="image">Image</option>
            </select>
        </label>
        <button wire:click="submit" class="bg-indigo-900 text-white px-4 py-2 rounded-2xl h-full">
            Submit
        </button>
    </div>

</div>
