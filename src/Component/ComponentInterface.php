<?php

namespace PTK\Webface\Component;

/**
 * Componentes são cada um dos elementos que formam a UI.
 * 
 * São exemplos de componentes:
 * 
 * - tabelas;
 * - campos em formulário e o próprio formulário;
 * - paineis;
 * - organizadores de layout
 * - botões;
 * - etc.
 */
interface ComponentInterfrace
{
    /**
     * Todo componente pode ter um valor no atributo html "id" do elemento html de nível superior.
     * 
     * Esse valor pode ser, então, utilizado pelo Javascript para manipular o elemento a nível de DOM ou então, para definição de CSS personalizado.
     */
    public function setId(string $id): ComponentInterfrace;

    /**
     * @see \PTK\Webface\Component\ComponentInterfrace::setId()
     */
    public function getId(): string|null;

    /**
     * Constroi o código html do componente.
     */
    public function build(): string;

    /**
     * @see \PTK\Webface\Component\ComponentInterfrace::build()
     */
    public function __toString(): string;
}
