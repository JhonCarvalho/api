<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phone
 *
 * @ORM\Table(name="phone", indexes={@ORM\Index(name="id_people_idx", columns={"id_people"})})
 * @ORM\Entity
 */
class Phone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="phone", type="integer", nullable=true)
     */
    private $phone;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\People
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\People")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_people", referencedColumnName="id")
     * })
     */
    private $idPeople;

    /**
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return People
     */
    public function getIdPeople()
    {
        return $this->idPeople;
    }

    /**
     * @param People $idPeople
     */
    public function setIdPeople($idPeople)
    {
        $this->idPeople = $idPeople;
    }


}

