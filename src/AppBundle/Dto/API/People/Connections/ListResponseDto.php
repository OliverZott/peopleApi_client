<?php


namespace AppBundle\Dto\API\People\Connections;


use Doctrine\Common\Collections\ArrayCollection;

class ListResponseDto
{

    /**
     * @var int
     */
    public $totalItems;

    /**
     * @var int
     */
    public $totalPeople;

    /**
     * @var PersonDto[]
     */
    public $people;


    public function __construct()
    {
        $this->people = new ArrayCollection();
    }


    /**
     * @return PersonDto[]|ArrayCollection
     */
    public function getPeople(): ArrayCollection
    {
        return $this->people;
    }


    /**
     * @param ArrayCollection $people
     */
    public function setPeople(ArrayCollection $people)
    {
        $this->people = $people;
    }


    public function addPeople(PersonDto $person)
    {
        $this->people->add($person);
    }

    public function removePeople(PersonDto $person)
    {
        $this->people->removeElement($person);
    }





}