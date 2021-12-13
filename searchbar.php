<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Search</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ORMTAHA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/orm/index.php">Tickets <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/orm/POST.php">Add <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/orm/searchbar.php">Search <span class="sr-only">(current)</span></a>
      </li>

    </ul>
  </div>
</nav>
<form method="post">
  <div class="form-group">
  <input class="form-control" type="text" name="search" >
  <input type="submit" class="btn btn-primary" name="submit">
  </div>
</form>
</body>
</html>
<?php 
$con = new PDO('mysql:host=localhost;dbname=testing3', 'root', '');
if (isset($_POST["submit"])) {
  $str = $_POST["search"];
  $sth = $con->prepare("SELECT * FROM `tickets` WHERE nom = '$str'");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth -> execute();

  if($row = $sth->fetch())
  {
    ?>
    <br><br><br>
    <table>
      <tr>
        <th>Nom du ticket</th>
        <th>Nom du service</th>
        <th>Description du ticket</th>
      </tr>
      <tr>
        <td><?php echo $row->nom; ?></td>
        <td><?php echo $row->service; ?></td>
        <td><?php echo $row->description;?></td>
      </tr>

    </table>
<?php 
  }
    
    
    else{
      echo "Ticket does not exist";
    }

}
 ?>
