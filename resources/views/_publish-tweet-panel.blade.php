<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <div class="text-sm font-medium text-gray-700">
        
        <textarea name="body"  class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" required placeholder="What`s up?"></textarea>
        </div>
        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <img class="rounded-full mr-2" style="width:50px;height: 50px" src="{{ auth()->user()->avatar }}" alt="Avatar">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg px-8 text-sm text-white h-10 shadow">Publish</button>

        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>