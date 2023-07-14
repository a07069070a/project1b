@extends('layouts.app')

@section('content')
    @if (count($posts))
    @foreach ($posts as $index => $post)
        <div>
            <a href=" {{ route('posts.show', $post) }} "> {{ $post->title }} </a>
        </div>
    @endforeach

    <div>
        {{ $posts->links() }}
    </div>
    @else
        There is nothing to see here.
    @endif

@endsection