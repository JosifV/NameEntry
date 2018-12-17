

<!DOCTYPE html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Data entry</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
   <div id="obruc">
      <div id="formular">
         <a href="dodaj.php">Add name</a><br/>
         <a href="index.php">Search</a><br/><br/>
        <?php
            require "konekcija.php";
            $query = "SELECT * FROM imenakorisnika";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <br/>
                    <div id="poruka">
                    <br/>
                        <a href="brisiKontakt.php?id=<?php echo $row['id']?>">X Delete</a>
                        <h4>ID: <?php echo $row['id']?></h4>
                        <h4>Name: <?php echo $row['ime']?></h4>
                    </div>
                    <?php
                }
            }
            else{
                echo "Database empty...";
            }
        ?>
      </div>
   </div>
</body>
</html>

