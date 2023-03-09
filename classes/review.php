<?php
include('connexion.php');
class review
{

    private $id;
    private $message;
    private $author;
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

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
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