<?php
include('connexion.php');
class manager
{

    private $bdd;
    
   
    

    /* CONSTRUCT */

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    /* HYDRATE */

     public function getAllDestination()
    {
        $data = $this->bdd->query("SELECT * FROM destination")->fetchAll();
        // and somewhere later:
        return $data;
    }

    public function getOperatorByDestination($location)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM destination d JOIN tour_operator t ON d.tour_operator_id = t.id WHERE location = ?");
        $stmt->execute([$location]); 

        
        // and somewhere later:
        $datas = $stmt->fetchAll();
        return $datas;
    }
    public function createReview($message, $author, $tour_operator_id)
    {
        $sql = "INSERT INTO review (message, author, tour_operator_id) VALUES (?,?,?)";
        $stmt= $this->bdd->prepare($sql);
        $stmt->execute([$message, $author, $tour_operator_id]);
    }
}
?>