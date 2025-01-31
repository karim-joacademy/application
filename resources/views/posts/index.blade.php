<x-layout>
    <h1 class="title">Posts</h1>

    <div class="grid grid-cols-2 gap-6">

        @foreach($posts as $post)
            <div class="card bg-white">
                <h2 class="font-bold text-xl ">{{ $post['title'] }}</h2>

                <div class="text-xs font-light mb-2">
                    <span>Posted {{ $post['created_at']->diffForHumans() }} by</span>
                    <a href="" class="text-blue-500 font-medium">USERNAME</a>
                </div>

                <div class="text-sm mb-4">
                    <p>{{ Str::words($post['body'],30 )}}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div>
        {{ $posts->links() }}
    </div>
</x-layout>
