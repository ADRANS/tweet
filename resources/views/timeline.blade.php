<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('tweets.store')}}" method="post">
                        @csrf
                        <textarea name="content" class="textarea textarea-bordered w-full" placeholder="apa yang kamu katakan?"
                        rows="3"></textarea>
                        <br>
                        <input type="submit" class="btn btn-secondary" value="Tweet">
                    </form>
                        </div>
                      </div>

                      
                        @foreach($tweets as $tweet)
                        <div class="card my-4 bg-white space-y-2">
                          <div class="card-body">
                            <h2 class="text-xl font-bold">{{ $tweet->id }}</h2>
                            <p>{{ $tweet->content }}</p>
                            <div class="text-end">
                                <form action="{{ route('tweets.destroy', $tweet->id)}}" method="post">
                                    <a href="{{ route('tweets.edit', $tweet->id)}}" class="link link-hover text-white-400 btn btn-dark btn-sm">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Hapus" class="btn btn-warning btn-sm">
                                    <span class="text-sm">{{ $tweet->created_at->diffForHumans() }}</span>
                                </form>
                            </div>
                          </div>
                        </div>  
                        @endforeach
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
