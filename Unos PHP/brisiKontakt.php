<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        require "konekcija.php";        
        $query = "DELETE FROM imenakorisnika WHERE id = {$id}";  
        mysqli_query($conn,$query);
        header("location: brisi.php");
    }
?>