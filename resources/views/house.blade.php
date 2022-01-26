@extends('layout.main')

@section('content')

<h2>Maison <?= $house->name; ?></h2>

<ul class="characters-list">

    <?php foreach ($house->characters as $character) : ?>
    <li class="character-card">
        <a href="/character/<?= $character->id; ?>">

            <div class="avatar" style="background: #<?= $house->colour; ?>;">
                <img src="/assets/img/<?= $character->image; ?>" alt="<?= $character->first_name; ?>">
            </div>
            <div class="name">
                <?= $character->first_name . ' ' . $character->last_name; ?>
            </div>
        </a>
    </li>
    <?php endforeach ?>

</ul>

@stop
