<?php

namespace Modules\Pizza\Entities\Pan;

class NotFoundPan extends Pan
{
    public function calculateDoughWeight($measures)
    {
        return 0;
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }
}
