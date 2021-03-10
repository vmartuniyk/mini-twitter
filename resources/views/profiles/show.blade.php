<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="Profile Banner" class="w-full rounded-lg mb-2">
            <img class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
             style="left:50%;" width="150px" src="{{ $user->avatar }}" alt="Avatar">
        </div>

        <div class="flex justify-between items-center mb-6 ">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->DiffForHumans() }} </p>
            </div>

            <div class="flex">
            @can('edit', $user)
                <a href="{{ route('profile.edit', $user->username) }}" class="rounded-full py-2 px-4 text-black border border-gray-300 text-xs mr-2">Edit Profile</a>
            @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        
        <p class="text-sm ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Accusamus officiis eveniet tempora veritatis quia ipsum, recusandae sed rerum quae minus
         assumenda nam incidunt velit consequuntur, modi exercitationem magnam, excepturi deserunt.</p>


    </header>

    <hr>

    @include('_timeline', ['tweets' => $tweets ])
</x-app>