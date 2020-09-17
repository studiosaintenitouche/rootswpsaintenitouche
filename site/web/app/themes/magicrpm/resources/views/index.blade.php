@extends('layouts.app')

@section('content')

  <div class="container container--footer plr-container mzauto">
    <ul>
      @while (have_posts())
      @php
      setup_postdata(the_post())
      @endphp
        <li>
          <div>
            <a href="{{ get_permalink() }}">
              <h2>{{ the_title() }}</h2>
              <span>{{ the_time('j F Y') }}</span>
            </a>
          </div>
        </li>
      @endwhile
      @php wp_reset_postdata() @endphp
    </ul>
    {!! get_the_posts_navigation() !!}
  </div>

@endsection