<?php

namespace PTK\Webface\Component;

abstract class ContainerBase extends ComponentBase implements ContainerInterface
{
    protected array $children = [];
    
    public function addChild(ComponentInterfrace|string ...$child): ContainerInterface
    {
        $this->children = array_merge($this->children, $child);
        return $this;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function getChild(int $index): ContainerInterface|string
    {
        return $this->children[$index];
    }

    public function addChildToIndex(ComponentInterfrace|string $child, int $index): ContainerInterface
    {
        $this->children[$index] = $child;
        return $this;
    }

    public function numChildren(): int
    {
        return sizeof($this->children);
    }
}