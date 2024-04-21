<?php

declare(strict_types=1);


namespace CarMaster;


//Замовлення автозапчастин(постачальник автозапчастин)
class Supplier
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}


