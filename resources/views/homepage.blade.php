@extends('layout.main')

@section('content')

<ul class="characters-list">

    <?php foreach ($characters as $character) : ?>

    <li class="character-card">
        <a href="/character/<?= $character->id; ?>">

            <div class="avatar" style="background: #<?= $character->findHouseById($character->id); ?>;">
                <img src="assets/img/<?= $character->image; ?>" alt="<?= $character->first_name . ' ' . $character->last_name; ?>">
            </div>
            <div class="name">
                <?= $character->first_name . ' ' . $character->last_name; ?>
            </div>
        </a>
    </li>

    <?php endforeach ?>

</ul>

@stop
