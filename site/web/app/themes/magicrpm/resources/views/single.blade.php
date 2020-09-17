@extends('layouts.app')

@section('content')
@php
    global $posts_id_displayed;
    $posts_id_displayed = [];
@endphp
    @while (have_posts())
        @php
        setup_postdata(the_post());
        $slug = get_primary_category_slug(get_the_category());
        @endphp
            <article class="article article--single article--default article--{{ $slug }}">
                <div class="article__header">
                    @include('partials.single-post.default.media-title')
                </div>
                <div class="article__body">
                    @include('partials.single-post.default.main')
                    @include('partials.single-post.default.sidebar')
                </div>
            </article>
            @include('partials.single-post.default.more-posts')
        @php wp_reset_postdata() @endphp
    @endwhile
@endsection