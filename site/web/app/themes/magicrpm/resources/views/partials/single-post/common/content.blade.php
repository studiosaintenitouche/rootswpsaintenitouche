<div class="article__content">
    @include('partials.single-post.common.share-buttons')
    @if(has_excerpt()) 
        <p class="article__introduction">{{ get_the_excerpt() }}</p>
    @endif
    {{ the_content() }}
</div>