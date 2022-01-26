@extends('layout.main')

@section('content')

<div class="character-page">
    <h3>
        <?= $messageCharacter ?? $messageHouse ?? $message; ?>
    </h3>
</div>

@stop
