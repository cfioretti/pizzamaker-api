<?php

namespace Modules\Pizza\Entities;

use stdClass;

abstract class Entity
{
    /**
     * @param stdClass $object
     * @return static
     */
    public abstract static function importFromObject(stdClass $object);
}
