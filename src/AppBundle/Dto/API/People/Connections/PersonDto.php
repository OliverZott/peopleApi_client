<?php


namespace AppBundle\Dto\API\People\Connections;


use Doctrine\Common\Collections\ArrayCollection;

class PersonDto
{

    /**
     * @var string
     */
    public $resourceName;


    /**
     * @var NameDto[]
     */
    public $names;


    public function __construct()
    {
        $this->names = new ArrayCollection();
    }

    /**
     * @return NameDto[]|ArrayCollection
     */
    public function getNames(): ArrayCollection
    {
        return $this->names;
    }

    /**
     * @param NameDto[]|ArrayCollection $names
     */
    public function setNames(ArrayCollection $names)
    {
        $this->names = $names;
    }


    public function addName(NameDto $name)
    {
        $this->names->add($name);
    }

    public function removeName(NameDto $name)
    {
        $this->names->removeElement($name);
    }

    // Special Method

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        $firstName = $this->names->first();
        return $firstName ? $firstName->displayName : '';
    }

}