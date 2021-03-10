<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-grey-400'}}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}"><img class="rounded-full mr-2" style="width: 40px;height: 40px" src="{{ $tweet->user->avatar }}" alt="Avatar"></a>
    </div>
    <div>
        <h5 class="text-bold my-4">
            <a href="{{ route('profile', $tweet->user) }}">
                {{ $tweet->user->name}}
            </a>
            
        </h5>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>