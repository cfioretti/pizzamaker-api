<?php

namespace App\Entities\Pan;

class PanFactory
{
    /**
     * @param $shape
     * @return PanInterface
     */
    public static function getPanByShape($shape): PanInterface
    {
        switch (strtolower($shape)) {
            case 'round':
                return new RoundPan();
            case 'rectangular':
                return new RectangularPan();
            default :
                return new NotFoundPan();
        }
    }

    /** @return PansList */
    public static function getPansList(): PansList
    {
        $pansList = new PansList();
        $pansList->add(RoundPan::acceptedMeasures());
        $pansList->add(SquarePan::acceptedMeasures());
        $pansList->add(RectangularPan::acceptedMeasures());

        return $pansList;
    }

    /**
     * @param array $pans
     * @return PansList
     */
    public function generatePansList(array $pans): PansList
    {
        $pansList = new PansList();
        foreach ($pans as $pan) {
            $obj = new \stdClass();
            $obj->shape = $pan['shape'];
            $obj->measures = $pan['measure'];

            $panShape = $this->getPanByShape($obj->shape);
            $obj->doughWeight = $panShape->calculateDoughWeight($obj->measures);
            $panObj = $panShape::importFromObject($obj);

            $pansList->add($panObj->toArray());
        }
        return $pansList;
    }
}
