@php
    $note = get_the_terms(get_the_ID(), 'notes');
@endphp
@if($note)
    @php $note_number = $note[0]->name; @endphp
@endif

@if($note)
    <div class="album__note album__note--{{ $note_number }}">
        <div class="album__note-pellet"></div>
        <div class="album__note-pellet"></div>
        <div class="album__note-pellet"></div>
        <div class="album__note-pellet"></div>
        <div class="album__note-pellet"></div>
        <div class="album__note-pellet"></div>
    </div>
@endif