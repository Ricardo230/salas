<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalaPersonas
 *
 * @ORM\Table(name="sala_personas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SalaPersonasRepository")
 */
class SalaPersonas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_apartado", type="integer")
     */
    private $idApartado;

    /**
     * @var int
     *
     * @ORM\Column(name="id_persona", type="integer")
     */
    private $idPersona;

    /**
     * @var bool
     *
     * @ORM\Column(name="flag_activo", type="boolean")
     */
    private $flagActivo;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idApartado
     *
     * @param integer $idApartado
     *
     * @return SalaPersonas
     */
    public function setIdApartado($idApartado)
    {
        $this->idApartado = $idApartado;

        return $this;
    }

    /**
     * Get idApartado
     *
     * @return int
     */
    public function getIdApartado()
    {
        return $this->idApartado;
    }

    /**
     * Set idPersona
     *
     * @param integer $idPersona
     *
     * @return SalaPersonas
     */
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get idPersona
     *
     * @return int
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * Set flagActivo
     *
     * @param boolean $flagActivo
     *
     * @return SalaPersonas
     */
    public function setFlagActivo($flagActivo)
    {
        $this->flagActivo = $flagActivo;

        return $this;
    }

    /**
     * Get flagActivo
     *
     * @return bool
     */
    public function getFlagActivo()
    {
        return $this->flagActivo;
    }
}
