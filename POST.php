
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Add</title>
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
<form action="bdd.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom du ticket</label>
    <input name="nom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nom du service</label>
    <input name="service" type="text" class="form-control" id="exampleInputPassword1" placeholder="service">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Description du ticket</label>
    <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>