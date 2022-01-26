<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'house';

    /**
     * Relation ManyToMany entre les tables Character et House
     *
     * @return mixed
     */
    public function characters()
    {
        // on précise dans l'ordre le Model visée, son nom dans la BDD, la table que l'on interroge et enfin celle qui fait la jointure
        return $this->belongsToMany(Character::class, 'house_has_characters', 'house', 'character');
    }
}
