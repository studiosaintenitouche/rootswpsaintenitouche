  
<!doctype html>
<html {!! get_language_attributes() !!}>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @php wp_head() @endphp
  </head>
  <body <?php body_class(); ?>>
    @php
      do_action('get_header');
    @endphp
    @include('partials.common.header')
    <main class="content" role="main">
      @yield('content')
    </main>
    @php do_action('get_footer') @endphp
    @include('partials.common.footer')
    @php wp_footer() @endphp
  </body>
</html>