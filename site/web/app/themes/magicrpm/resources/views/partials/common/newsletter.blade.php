@php
  $id_form = get_option( 'gf_newsletter_id');
@endphp
<div class="newsletter-form">
    <div class="newsletter-form__content">
        <h2 class="newsletter-form__title">La Magic Newsletter</h2>
        <p class="newsletter-form__subtitle">Toutes les semaines, les dernières infos, nos meilleures offres,<br> vidéos, playlists et avant-premières.</p>
        @php gravity_form((int)$id_form, false) @endphp
    </div>
</div>