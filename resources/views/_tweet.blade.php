<div class="flex p-4 border-b border-b-grey-400 ">
    <div class="mr-2 flex-shrink-0">
        <img class="rounded-full mr-2" src="{{ $tweet->user->avatar }}" alt="Avatar">
    </div>
    <div>
        <h5 class="text-bold my-4">{{ $tweet->user->name}}</h5>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>