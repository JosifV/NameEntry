<?php 
require "konekcija.php";
if(isset($_GET['inputac'])){
    if(!empty($_GET['inputac'])){
        $inputac = trim($_GET['inputac']);
        $inputac = mysqli_real_escape_string($conn, $inputac);
        $query = "SELECT * FROM imenakorisnika WHERE ime LIKE '%{$inputac}%'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <div id="rezultat">
                    <h4>ID: <?php echo $row['id']?></h4>
                    <h4>Name: <?php echo $row['ime']?></h4>
                </div>
                <?php
            }
            echo "<div id='rezultat'>"."Results found" .mysqli_num_rows($result)."</div>";
        }
        else{
            echo "No results ";
        }
    }
    else{
        echo "Input is empty...";
    }
}
/* else{
    echo "Ukucajte ime koje zelite da potrazite";
} */
?>