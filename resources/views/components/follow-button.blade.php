@if( current_user()->isNot($user))
    <form method="POST" action="{{ route('follow', $user->username) }}">
        @csrf
        <button type="submit" class="bg-blue-500 rounded-full py-2 px-4 text-white shadow text-xs">
            {{ current_user()->following($user) ? 'Unfollow me' : 'Follow me' }}
        </button>

    </form>
@endif
