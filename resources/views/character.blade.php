@extends('layout.main')

@section('content')

<section class="character-page">
                    <div class="col-8">
                        <h2><?= $character->first_name . ' ' . $character->last_name; ?></h2>
                        <div class="bio">
                            <h3>Biographie</h3>
                            <p>
                            <?= $character->biography; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="avatar" style="background: #<?= $houses[0]->colour; ?>;">
                            <img src="/assets/img/<?= $character->image; ?>" alt="<?= $character->first_name; ?>">
                        </div>
                        <div class="infos">
                            <h3>Maisons</h3>
                            <div class="houses">
                                <ul>
                                    <?php foreach ($houses as $house) : ?>

                                    <li class="house-logo" style="background: #<?= $house->colour; ?>;">
                                        <a href="/house/<?= $house->id; ?>">
                                            <img src="/assets/img/houses/<?= $house->image; ?>" alt="<?= $house->name; ?>">
                                        </a>
                                    </li>
                                    <?php endforeach ?>

                                </ul>
                            </div>
                            <ul class="meta">
                                <li><span>Rang : </span> <?= $title->name; ?></li>
                                <li><span>Mère : </span> <a href="<?= !empty($mother->id) ? '/character/' . $mother->id : '#'; ?>"><?= !empty($mother->first_name) ? $mother->first_name . ' ' . $mother->last_name : 'Non renseigné'; ?></a></li>
                                <li><span>Père : </span> <a href="<?= !empty($father->id) ? '/character/' . $father->id : '#'; ?>"><?= !empty($father->first_name) ? $father->first_name . ' ' . $father->last_name : 'Non renseigné'; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </section>

@stop
