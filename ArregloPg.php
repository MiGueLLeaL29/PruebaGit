<?php
class ArregloPg
{

    public function __construct(
        protected String $NombrePagina,
        protected String $Description,
        protected Int $Costo,
        protected DateTime $FechaHoy,
        protected DateTime $FechaX,
        protected bool $condicionalIf,
        protected array $arreglos,
    ) {}

    public function __get($name)
    {
        if (property_exists($this, $name)){
            return $this->$name;
        }

        return null;
    }


    public function addArray(string $newEtiqueta): void
    {
        if (empty($newEtiqueta)!== true) {
            if (in_array($newEtiqueta, $this->arreglos)) {
                return;
            } else {
                $this->arreglos[] = $newEtiqueta;
            }
        }
    }
}
