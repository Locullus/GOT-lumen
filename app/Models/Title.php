<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    /**
     * Le nom de la Table associée au Model
     *
     * @var string
     */
    protected $table = 'title';

    /**
     * Relation OneToMany d'un titre aux personnages
     *
     * @return mixed
     */
    public function characters()
    {
        return $this->hasMany(Character::class, 'id_title');
    }
}
