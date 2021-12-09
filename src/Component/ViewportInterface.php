<?php

namespace PTK\Webface\Component;

/**
 * Viewport representa a página web.
 *
 */
interface ViewportInterface extends ContainerInterface
{
    public function __construct(string $title);
}
