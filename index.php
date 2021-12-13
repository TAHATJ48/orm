<?php   
$pdo = new PDO('mysql:host=localhost;dbname=testing3', 'root', '');
$query = "SELECT  * from tickets";
$d = $pdo->query($query);  



 ?>
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tickets</title>
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

<div class="col-md-12 head">
    <div class="float-right">
        <a href="export.php" class="btn btn-success"><i class="dwn"></i> Export</a>
    </div>
</div>
















<table class="table ">  
<tr> 
    <th>Nom</th> 
    <th>Service</th> 
    <th>Description</th> 
</tr>
<?php   
foreach ($d as $data) {
  // code...

 ?>
 <tr> 
    <td><?php   echo  $data['nom']; ?> </td>
    <td><?php   echo  $data['service']; ?></td>
    <td><?php   echo  $data['description']; ?></td>

 </tr>
 <?php  
 } 
 ?>
 </table>
</body>
</html>