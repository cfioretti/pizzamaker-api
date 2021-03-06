<?php

namespace App\Entities;

use stdClass;

abstract class Entity
{
    /**
     * @param stdClass $object
     * @return static
     */
    public abstract static function importFromObject(stdClass $object);
}
