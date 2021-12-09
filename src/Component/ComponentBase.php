<?php

namespace PTK\Webface\Component;

abstract class ComponentBase implements ComponentInterface
{
    protected string|null $id = null;

    public function setId(string $id): ComponentInterface
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): string|null
    {
        return $this->id;
    }

    abstract public function build(): string;

    public function __toString(): string
    {
        return $this->build();
    }
}
