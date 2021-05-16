@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Update Post
            </h1>
        </div>
    </div>
    <div class="w-4/5 m-auto pt-20">
        @if ($errors->any())
            <div class="m-auto bg-red-500 p-10">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" name="title" class="bg-gray-0 block border-b-2 w-full h-20 text-6xl outline-none"
                value="{{ $post->title }}">
            <textarea name="description" id=""
                class="py-20 bg-gray-0 block border-b-2 w-full h-60 text-xl outline-none">{{ $post->description }}</textarea>

            <button type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">Publish
                Post</button>
        </form>
    </div>

@endsection
