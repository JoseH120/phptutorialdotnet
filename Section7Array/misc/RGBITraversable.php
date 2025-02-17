<?php

class RGB implements IteratorAggregate
{
    private $colors = ['red', 'green', 'blue'];

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->colors);
    }
}
