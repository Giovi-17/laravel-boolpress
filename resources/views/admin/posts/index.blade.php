@extends('layouts.dashboard')

@section('content')

    <section>

        <h1>Lista dei post</h1>

            <div class="row row-cols-4">

                @foreach ($posts as $post)

                    <div class="col">

                        <div class="card mt-2">

                            @if ($post->cover)
                                <img src="{{ asset('storage/' . $post->cover) }}" class="card-img-top" alt="{{ $post->title }}">
                            @endif
                            
                            <div class="card-body">

                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ Str::substr($post->content, 0, 70) }}...</p>
                                <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Leggi il post</a>
                            
                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

    </section>

@endsection