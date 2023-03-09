<?php
include('connexion.php');
class destination
{

    private $id;
    private $location;
    private $price;
    private $tourOperatorld;
    

    /* CONSTRUCT */

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    /* HYDRATE */

    public function hydrate($donnees)
    {
        foreach ($donnees as $key => $value) {

            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getTourOperatorld()
    {
        return $this->tourOperatorld;
    }

    public function setTourOperatorld($tourOperatorld)
    {
        $this->$tourOperatorld = $tourOperatorld;
    }
    
}
?>