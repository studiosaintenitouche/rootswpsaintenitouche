@extends('layouts.app')

@section('content')
@while (have_posts())
@php
setup_postdata(the_post())
@endphp
<div class="single">
    <div class="single__intro-image">
      <img class="single__image" src="{{ the_post_thumbnail_url() }}">
    </div>
    <div class="single__article">
      <div class="container mzauto flex row">
          <article class="article">
            <h1 class="article__title">{{ the_title() }}</h1>
            <div class="article__publication-date">{{the_date('d F Y')}}</div>
            <div class="article__content">
              @php the_content() @endphp
            </div>
            <div class="article__share-box">
              <div class="article__share-title">
                Partager
              </div>
              <a href="https://www.facebook.com/sharer/sharer.php?u={{ get_permalink() }}" class="article__share-icon article__share-icon--facebook">
                Facebook
              </a>
              <a href="https://twitter.com/intent/tweet?url={{ get_permalink() }}" class="article__share-icon article__share-icon--twitter">
                Twitter
              </a>
              <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ get_permalink() }}" class="article__share-icon article__share-icon--linkedin">
                Linkedin
              </a>
            </div>
          </article>
      </div>
    </div>
</div>
@endwhile
  @php wp_reset_postdata() @endphp
@endsection