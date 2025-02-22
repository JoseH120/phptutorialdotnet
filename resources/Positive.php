<?php
class Positive
{
    public function __invoke($number)
    {
        return $number > 0;
    }
}
