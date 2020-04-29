<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping As ORM;


/**
 * Class Person
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonRepository")
 */
class Person
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;


    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    public $name;

    /**
     * @var integer
     * @ORM\Column(type="string", nullable=true)
     */
    public $phone;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getPhone(): int
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     */
    public function setPhone(int $phone)
    {
        $this->phone = $phone;
    }



}