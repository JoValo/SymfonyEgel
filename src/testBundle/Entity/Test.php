<?php

namespace testBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 */
class Test
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     */
    private $fechaFin;

    /**
     * @var string
     */
    private $estatus;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Test
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return Test
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set estatus
     *
     * @param string $estatus
     * @return Test
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return string 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
    /**
     * @var \UsuariosBundle\Entity\Test
     */
    private $usuario;


    /**
     * Set usuario
     *
     * @param \UsuariosBundle\Entity\Test $usuario
     * @return Test
     */
    public function setUsuario(\UsuariosBundle\Entity\Test $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \UsuariosBundle\Entity\Test 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
    /**
     * @var \testBundle\Entity\AreasCompletadas
     */
    private $areasCompletadas;


    /**
     * Set areasCompletadas
     *
     * @param \testBundle\Entity\AreasCompletadas $areasCompletadas
     * @return Test
     */
    public function setAreasCompletadas(\testBundle\Entity\AreasCompletadas $areasCompletadas = null)
    {
        $this->areasCompletadas = $areasCompletadas;

        return $this;
    }

    /**
     * Get areasCompletadas
     *
     * @return \testBundle\Entity\AreasCompletadas 
     */
    public function getAreasCompletadas()
    {
        return $this->areasCompletadas;
    }
}