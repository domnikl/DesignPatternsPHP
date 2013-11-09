<?php

namespace DesignPatterns\Builder;

/**
 * Director is part of the builder pattern. It knows the interface of the builder
 * and build a complex object with the help of the builder.
 * If you make it abstract, this becomes a "meta-factory-method" (very powerful).
 * 
 * You can also inject many builders instead of one to build more complex objects
 */
class Director
{

    /**
     * The director don't know 'bout concrete part
     *
     * @param BuilderInterface $builder
     *
     * @return Parts\Vehicle
     */
    public function build(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
