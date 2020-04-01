<?php

namespace App\Entities\Dough;

use App\Entities\Entity;
use stdClass;

class Dough extends Entity
{
    private $total = 0;
    private $flour;
    private $water;
    private $salt;
    private $evoOil;
    private $yeast;

    /**
     * @inheritDoc
     */
    public static function importFromObject(stdClass $object)
    {
        $dough = new self();
        if (
            isset($object->total) &&
            isset($object->flour) &&
            isset($object->water) &&
            isset($object->salt) &&
            isset($object->evoOil) &&
            isset($object->yeast)
        ) {
            $dough->total = $object->total;
            $dough->flour = $object->flour;
            $dough->water = $object->water;
            $dough->salt = $object->salt;
            $dough->evoOil = $object->evoOil;
            $dough->yeast = $object->yeast;
        }
        return $dough;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'dough' => $this->total,
            'flour' => $this->flour,
            'water' => $this->water,
            'salt' => $this->salt,
            'evoOil' => $this->evoOil,
            'yeast' => $this->yeast
        ];
    }
}
