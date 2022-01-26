<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /**
     * Le nom de la Table associée au Model
     *
     * @var string
     */
    protected $table = 'character';

    /**
     * Relation ManyToMany entre les tables Character et House
     *
     * @return mixed
     */
    public function houses()
    {
         // on précise dans l'ordre le Model, son nom dans la BDD, la table que l'on interroge et enfin celle qui fait la jointure
        return $this->belongsToMany(House::class, 'house_has_characters', 'character', 'house');
    }

    /**
     * Relation OneToMany inverse qui retourne le titre d'un personnage
     */
    public function title()
    {
        return $this->belongsTo(Title::class, 'id_title');
    }

    /**
     * Retourne les enfants d'un personnage
     *
     * @return mixed
     */
    public function children()
    {
        return $this->hasMany(Character::class);
    }

    /**
     * Retourne la mère d'un personnage
     *
     * @return mixed
     */
    public function mother()
    {
        return $this->belongsTo(Character::class);
    }

    /**
     * Retourne le père d'un personnage
     *
     * @return mixed
     */
    public function father()
    {
        return $this->belongsTo(Character::class);
    }

    /**
     * Retourne la couleur de la maison d'un personnage
     *
     * @param [type] $id
     *
     * @return mixed
     */
    public function findHouseById($id)
    {
        return $this->find($id)->houses[0]->colour;
    }
}
