<?php
class Person
{
    public $name;
    public $age;
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
};

class PersonComparer
{
    public static function compare(Person $x, Person $y)
    {
        return $x->age <=> $y->age;
    }
}
