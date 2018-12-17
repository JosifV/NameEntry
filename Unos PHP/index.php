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
         <a href="brisi.php">Delete name</a><br/><br/>
         <form method="GET" action="#">
            <input type="text" name="inputac" placeholder="Type some name"/><br/><br/>
            <input type="submit" name="submitac" value="Search"/>
         </form>
      </div>
      <?php 
      include 'incPhp.php';
         ?>
   </div>
</body>
</html>

