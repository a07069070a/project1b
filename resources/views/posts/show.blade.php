@extends('layouts.app')

@section('content')

  @if (session()->has('status'))
    <div>
        {{ session()->get('status') }}
    </div>
  @endif




<h1> {{ $post->title }} </h1>
<div>
  <p> {{ $post->body }} </p>
</div>
@endsection
