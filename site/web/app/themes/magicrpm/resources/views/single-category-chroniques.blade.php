@extends('layouts.app')

@section('content')
@php
    global $posts_id_displayed;
    $posts_id_displayed = [];
@endphp
    @while (have_posts())
        @php
            setup_postdata(the_post());
            $category_slug = get_primary_category_slug(get_the_category());
        @endphp
            <article class="article article--single article--{{ $category_slug }}">
                <div class="article__header">
                    <div class="article__album">
                        @include('partials.single-post.chroniques.album-header')
                    </div>
                    <h1 class="article__title">{{ the_title() }}</h1>
                </div>
                <div class="article__body">
                    <div class="article__main">
                        @include('partials.single-post.common.content')
                    </div>
                    <div class="article__sidebar">
                        <div class="advertising advertising-square">
                            <a href="" target="_blank" class="advertising__link">
                                <img href="" class="advertising__image advertising__image--mobile">
                                <img href="" class="advertising__image advertising__image--desktop">
                            </a>
                        </div>
                        @include('partials.single-post.chroniques.author')
                        @include('partials.single-post.common.current-magazine-sidebar')
                    </div>
                </div>
                <div class="article__footer">
                    @include('partials.single-post.chroniques.album-footer')
                </div>
            </article>
            @include('partials.single-post.chroniques.discover-stacked')
            @include('partials.common.newsletter-all-magazines')
        @php wp_reset_postdata() @endphp
    @endwhile
@endsection