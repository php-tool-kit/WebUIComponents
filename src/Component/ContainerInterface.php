<?php

namespace PTK\Webface\Component;

/**
 * Um container é um componente que suporta conmponentes filhos, tal como um painel, por exemplo.
 */
interface ContainerInterface extends ComponentInterface
{
    /**
     * Adiciona itens à fila de filhos.
     */
    public function addChildren(mixed ...$child): ContainerInterface;

    /**
     * Retorna a fila de filhos.
     */
    public function getChildren(): array;

    /**
     * Retorna um filho específico de acordo com o índice dele na fila de filhos.
     */
    public function getChild(int $index): ContainerInterface|string;

    /**
     * Adiciona/substitui um item para um determinado índice na fila de filhos.
     */
    public function addChildToIndex(mixed $child, int $index): ContainerInterface;

    /**
     * Quantos filhos tem o container.
     */
    public function numChildren(): int;
}
