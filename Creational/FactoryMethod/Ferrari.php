<?php
declare(strict_types = 1);

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Ferrari is a italian car
 */
class Ferrari implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @param string $rgb
     */
    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}
