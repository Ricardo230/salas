<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * ApartadoSala
 *
 * @ORM\Table(name="apartado_sala")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ApartadoSalaRepository")
 */
class ApartadoSala
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time")
     */
    private $hora;

    /**
     * @var bool
     *
     * @ORM\Column(name="flag_cancelado", type="boolean")
     */
    private $flagCancelado;

    /**
     * @var bool
     *
     * @ORM\Column(name="flag_activo", type="boolean")
     */
    private $flagActivo;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="reservaciones")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="Sala", inversedBy="reservaciones")
     * @ORM\JoinColumn(name="sala_id", referencedColumnName="id")
     */
    private $sala;

    /**
     * @ORM\OneToMany(targetEntity="SalaPersonas", mappedBy="idApartado")
     */
    private $personas;


    public function __construct()
    {
        $this->flagActivo = 1;
        $this->flagCancelado = 0;
        $this->personas = new ArrayCollection();
    }


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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return ApartadoSala
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return ApartadoSala
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set flagCancelado
     *
     * @param boolean $flagCancelado
     *
     * @return ApartadoSala
     */
    public function setFlagCancelado($flagCancelado)
    {
        $this->flagCancelado = $flagCancelado;

        return $this;
    }

    /**
     * Get flagCancelado
     *
     * @return bool
     */
    public function getFlagCancelado()
    {
        return $this->flagCancelado;
    }

    /**
     * Set flagActivo
     *
     * @param boolean $flagActivo
     *
     * @return ApartadoSala
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

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\User $usuario
     *
     * @return ApartadoSala
     */
    public function setUsuario(\AppBundle\Entity\User $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\User
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set sala
     *
     * @param \AppBundle\Entity\Sala $sala
     *
     * @return ApartadoSala
     */
    public function setSala(\AppBundle\Entity\Sala $sala = null)
    {
        $this->sala = $sala;

        return $this;
    }

    /**
     * Get sala
     *
     * @return \AppBundle\Entity\Sala
     */
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * Add persona
     *
     * @param \AppBundle\Entity\SalaPersonas $persona
     *
     * @return ApartadoSala
     */
    public function addPersona(\AppBundle\Entity\SalaPersonas $persona)
    {
        $this->personas[] = $persona;

        return $this;
    }

    /**
     * Remove persona
     *
     * @param \AppBundle\Entity\SalaPersonas $persona
     */
    public function removePersona(\AppBundle\Entity\SalaPersonas $persona)
    {
        $this->personas->removeElement($persona);
    }

    /**
     * Get personas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonas()
    {
        return $this->personas;
    }
}
