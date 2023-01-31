<?php

namespace Tripteki\Uid\Traits;

trait UniqueIdTrait
{
    /**
     * @return bool
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getKeyType()
    {
        return "string";
    }
};
