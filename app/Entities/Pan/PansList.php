<?php

namespace App\Entities\Pan;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;

class PansList extends Collection
{
    /** @var Pan[] */
    protected $pan;

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->map(function ($value) {
            return $value instanceof Arrayable ? $value->toArray() : $value;
        })->all();
    }
}
