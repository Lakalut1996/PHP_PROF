<?php

namespace GeekBrains\Borsh\Person;

class User
{
    private int $id;
    private string $name;
    private string $lastName;

    /**
     * @param int $id
     * @param string $name;
     * @param string $lastName;
     */
    public function __construct(int $id, string $name, string $lastName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        echo ($this) . PHP_EOL;
    }
    public function __toString(): string
    {
        return "Юзер $this->id под именем $this->name и с фамилией: $this->lastName создан" . PHP_EOL;
    }
}
