<?php
class Role
{
    private $id;
    private $name;
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function get_name(): string
    {
        return $this->name;
    }
    public function get_id(): int
    {
        return $this->id;
    }
}
