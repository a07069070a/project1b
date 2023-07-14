@extends('layouts.app')

@section('content')
    <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex justify-center">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf

            @if ($errors->any())
                <p> Please resolve the following problems: </p>
                @foreach ($errors->all() as $error)
                   <li> {{ $error }} </li>
                @endforeach
            @endif


            <div class="border shadow-lg">
            <input type="text" name="title" id="title" autocomplete="off" value="{{ old('title') }}" class="@error('title') border-red @enderror">
                @error('title')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="border shadow-lg">
                <textarea name="body" id="body" autocomplete="off" value="{{ old('body') }}" class="@error('body') border-red @enderror"></textarea>
                    @error('body')
                        <div>{{ $message }}</div>
                    @enderror
            </div>
            <div class="place-content-end">
                <button type="submit" class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Post</button>
            </div>
        </form>
    </div>

@endsection