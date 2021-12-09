<?php

namespace PTK\Webface\Component;

class Viewport extends ContainerBase implements ViewportInterface
{
    protected string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function build(): string
    {
        return "<!DOCTYPE html><html><head><title>{$this->title}</title></head><body></body>";
    }
}
