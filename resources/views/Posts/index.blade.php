<x-AppLayout>
    <h1>Título desde la vista index dentro de POSTS</h1>

    <ul>
        @foreach ($Post as $post)
            <li>
                <a href="">
                    {{$post->categories}}
                    {{-- {{dd($post->published_at)}} --}}
                </a>
            </li>
        @endforeach
    </ul>

    {{$Post->Links()}}
</x-AppLayout>
