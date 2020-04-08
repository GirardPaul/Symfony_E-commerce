<?php



namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class RechercheProduits{

    /**
     * @Assert\GreaterThanOrEqual(propertyPath="minPrix", message="Le prix max doit être plus grand que le min")
     */
    private $maxPrix;


    /**
     * @Assert\LessThanOrEqual(propertyPath="maxPrix", message="Le prix min doit être plus petit que le max")
     */
    private $minPrix;


    public function getMinPrix(){
        return $this->minPrix;
    }

    public function getMaxPrix(){
        return $this->maxPrix;
    }

    public function setMinPrix(int $prix){
        $this->minPrix = $prix;
        return $this;
    }

    public function setMaxPrix(int $prix){
        $this->maxPrix = $prix;
        return $this;
    }




}