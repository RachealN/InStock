<?php

namespace App\DesignPatterns\TemplateMethod;

abstract class Sub
{
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addOilAndVinegar();

    }

    protected function layBread()
    {
        var_dump('prepare Bread');

        return $this;
    }

    protected function addLettuce()
    {
        var_dump('add some lettuce');

        return $this;
    }

    protected function addOilAndVinegar()
    {
        var_dump('add some oil and vinegar');

        return $this;
    }

    protected abstract function addPrimaryToppings();

}
