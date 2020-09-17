@extends('layouts.app')

@section('content')
@php
    global $posts_id_displayed;
    $posts_id_displayed = [];
@endphp
    @while (have_posts())
        @php
            setup_postdata(the_post())
        @endphp
            <article class="article article--single article--longs-formats">
                <div class="article__header">
                    @include('partials.single-post.longs-formats.media-title-author')
                </div>
                <div class="article__body">
                    @include('partials.single-post.longs-formats.main')
                </div>
            </article>
            @include('partials.single-post.longs-formats.discover-long-form')
            @include('partials.common.newsletter-all-magazines')
        @php wp_reset_postdata() @endphp
    @endwhile
@endsection