<?php

namespace App\Entities\Pan;

use App\Entities\Entity;
use stdClass;

class Pan extends Entity implements PanInterface
{
    protected $shape;
    protected $measures;
    protected $doughWeight = 0;

    /**
     * @inheritDoc
     */
    public static function importFromObject(stdClass $object)
    {
        $pan = new self();
        if (
            isset($object->shape) &&
            isset($object->measures)
        ) {
            $pan->shape = $object->shape;
            $pan->measures = $object->measures;
            if (isset($object->doughWeight)) {
                $pan->doughWeight = $object->doughWeight;
            }
        }
        return $pan;
    }

    /**
     * @param $originalWeight
     * @return int
     */
    public function addPercentageToWeight($originalWeight)
    {
        $marginToAdd = ($originalWeight / 100) * self::PERCENTAGE_OF_DOUGH_TO_ADD;

        return round($originalWeight + $marginToAdd);
    }

    public function calculateDoughWeight($measures)
    {
    }

    public static function acceptedMeasures()
    {
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $toArray = [
            'shape' => $this->shape,
            'measures' => $this->measures
        ];
        if ($this->doughWeight > 0) {
            $toArray['dough'] = $this->doughWeight;
        }

        return $toArray;
    }
}
