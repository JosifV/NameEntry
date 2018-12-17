

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
         <a href="index.php">Search</a><br/>
         <a href="brisi.php">Delete name</a><br/><br/>
         <form method="POST" action="#">
            <input type="text" name="ime" placeholder="Add new name"/>
            <input type="submit" name="unos" value="Add"/>
         </form>
      </div>
      <br/>
      <div id="poruka">
        <?php
            if(isset($_POST['unos'])){
                if(isset($_POST['ime'])){
                    if(!empty($_POST['ime'])){
                        $ime = trim($_POST['ime']);
                        require "konekcija.php";
                        // $ime = msqli_real_escape_string($conn, $ime);

                        $query = "INSERT INTO imenakorisnika (ime) VALUE ('{$ime}')";
                        if(mysqli_query($conn,$query) === true){
                            echo "Name entered in database";
                        }
                        else{
                            echo "Error occurred, name not entered in database..";
                        }

                    }
                    else{
                        echo "You clicked Add but no name is typed, please type some name...";
                    }
                }
                else{
                    echo "Type name you want to add";
                }
                
            }
            else{
                echo "Type name you want to add";
            }
        ?>
      </div>
   </div>
</body>
</html>

