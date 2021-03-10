<x-app>
    <div>
        @foreach($users as $user)
        <a href="{{ route('profile', $user) }}" class="flex items-center mb-4">
            <img src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar" width="60px" class="mr-4 rounded">
        

            <div class="font-bold"> {{ $user->name}}</div>
        </a>
        @endforeach

        {{ $users->links() }}
    </div>
</x-app>