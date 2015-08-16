<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * ItalianFactory is vehicle factory in Italy
 */
class ItalianFactory extends FactoryMethod
{
    /**
     * {@inheritdoc}
     */
    protected function createVehicle(string $type) : VehicleInterface
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                return new Ferrari();
                break;
            default:
                throw new \InvalidArgumentException($type . ' is not a valid vehicle');
        }
    }
}
