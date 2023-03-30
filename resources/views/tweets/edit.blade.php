<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tweet Edit
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('tweets.update', $tweet->id)}}" method="post">
                        @csrf
                        @method('put')
                        <textarea name="content" class="textarea textarea-bordered w-full" placeholder="apa yang kamu katakan?"
                        rows="3">{{ $tweet->content}}</textarea>
                        <br>
                        <input type="submit" class="btn btn-dark" value="Edit">
                    </form>
                        </div>
                      </div>
        </div>
    </div>
</x-app-layout>