<?php

namespace PTK\Webface\Component;

/**
 * Um container é um componente que suporta conmponentes filhos, tal como um painel, por exemplo.
 */
interface ContainerInterface extends ComponentInterfrace
{
    /**
     * Adiciona instâncias de ComponentInterface ou string à fila de filhos.
     */
    public function addChildren(ComponentInterfrace|string ...$child): ContainerInterface;

    /**
     * Retorna a fila de filhos.
     */
    public function getChilds(): array;

    /**
     * Retorna um filho específico de acordo com o índice dele na fila de filhos.
     */
    public function getChild(int $index): ContainerInterface|string;

    /**
     * Adiciona/substitui um componente ou string para um determinado índice na fila de filhos.
     */
    public function addChildToIndex(ComponentInterfrace|string $child, int $index): ContainerInterface;

    /**
     * Quantos filhos tem o container.
     */
    public function numChildren(): int;
}
