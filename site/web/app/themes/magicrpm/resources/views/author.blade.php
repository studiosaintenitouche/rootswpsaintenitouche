@php
    $author = get_the_author();
    $author_url = get_author_posts_url(get_the_author_meta('ID'));
    $author_avatar_url = get_avatar_url(get_the_author_meta('email'));
    $author_name = get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );
    $author_bio = get_the_author_meta( 'description' );
    $acf_user_id = 'user_'.strval(get_the_author_meta('ID'));
    $author_twitter = get_field('twitter_nickname', $acf_user_id);
    global $posts_id_displayed;
    $posts_id_displayed = [];
@endphp


@extends('layouts.app')

@section('content')

  <div class="author author--single">
    <div class="author__header">
        <div class="author__infos">
            <div class="author__avatar">
                <img class="author__avatar-image" src="{{ $author_avatar_url }}">
            </div>
            <h1 class="author__name">{{ $author_name }}</h1>
            <div class="author__bio">
                {{ $author_bio }}
            </div>
            <div class="author__social-medias">
                <div class="social-medias">
                    <div class="social-medias__list">
                        <a href="https://twitter.com/{{ $author_twitter }}" class="social-medias__item social-medias__item--twitter">
                            Twitter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="author__body">
        <div class="posts-list posts-list--masonry">
            <div class="posts-list__list">
                @include('partials.common.default-loop-preview')
            </div>
        </div>
    </div>
  </div>

@endsection