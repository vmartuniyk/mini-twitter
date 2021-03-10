<x-app>
    
    <form class="mt-8 space-y-6" action="{{ route('profile.update', $user->username)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm ">
          <div class="mb-2">
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input id="username" name="username" value="{{ $user->username }}" type="text" autocomplete="username" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Username">
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>

          <div class="mb-2">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input id="name" name="name" value="{{ $user->name }}" type="text" autocomplete="name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
          

          <div class="mb-2">
            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
            <input id="email" name="email" value="{{ $user->email }}" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          </div>
          <div class="mb-2">
                <label class="block text-sm font-medium text-gray-700">
                Avatar
                </label>
                <div class="mt-1 flex items-center">
                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                <img src="{{ $user->avatar }}"
                     alt="your avatar"
                     width="60"
                >
                </span>
                 <input class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                       type="file"
                       name="avatar"
                       id="avatar"
                >
              
                </div>
                @error('avatar')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            

          <div class="mb-2">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb-2">
            <label for="password-confirm" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input id="password-confirm" name="password_confirmation" type="password" required autocomplete="new-password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm Password">
           
          </div>


        </div>
  
      
  
        <div class="flex justify-center text-center">
          <button type="submit" class="group relative  flex justify-center py-2 px-4 mr-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
     
            </span>
           Update profile
          </button>
         
          <a href="{{ route('profile', $user->username)}}" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</a>
        </div>
      </form>

</x-app>