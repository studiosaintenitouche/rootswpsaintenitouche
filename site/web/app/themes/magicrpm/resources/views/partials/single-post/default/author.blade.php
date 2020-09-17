@php
    $author = get_the_author();
    $author_url = get_author_posts_url(get_the_author_meta('ID'));
    $author_avatar_url = get_avatar_url(get_the_author_meta('email'));
    $author_name = get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );
    $author_bio = get_the_author_meta( 'description' );
    $acf_user_id = 'user_'.strval(get_the_author_meta('ID'));
    $author_twitter = get_field('twitter_nickname', $acf_user_id);
@endphp
<div class="article__author">
    <div class="author">
        <div class="author__content">
            <div class="author__infos">
                <div class="author__avatar">
                    <img class="author__avatar-image" src="{{ $author_avatar_url }}">
                </div>
                <div class="author__name">{{ $author_name }}</div>
                <div class="author__social-medias">
                    <div class="social-medias__list">
                    <a href="https://twitter.com/{{ $author_twitter }}" class="social-medias__item social-medias__item--twitter">
                            Twitter
                        </a>
                    </div>
                </div>
            </div>
            <p class="author__bio">
                {{ $author_bio }}
            </p>
        </div>
    </div>
</div>