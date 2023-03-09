<?php
include('connexion.php');
class tour_operator
{

    private $id;
    private $name;
    private $link;
    private $gradeCount;
    private $gradeTotal;
    private $isPremium; 

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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getGradeCount()
    {
        return $this->gradeCount;
    }

    public function setGradeCount($gradeCount)
    {
        $this->gradeCount = $gradeCount;
    }
    public function getGradeTotal()
    {
        return $this->gradeTotal;
    }

    public function setGradeTotal($gradeTotal)
    {
        $this->gradeCount = $gradeTotal;
    }


    public function getIsPremium()
    {
        return $this->isPremium;
    }

    public function setIspremium($isPremium)
    {
        $this->isPremium = $isPremium;
    }


}
?>