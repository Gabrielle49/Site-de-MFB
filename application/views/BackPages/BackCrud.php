<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Site de Réformes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" media="screen and (max-width: 1280px)" href="css/styles.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <script type="text/javascript">
            $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rubrique1.php">Rubrique1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rubrique2.php">Rubrique2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rubrique3.php">Rubrique3</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                   <nav class="navbar navbar bg-light">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Insert et Modification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="BackCRUDelete.php">Liste et Suppression</a>
                        </li>
                     </ul>
                   </nav>
                </div>
                <div class="col-md-10" >
                	<h2 class="titleBack"><i class="material-icons">create</i>Insertion</h2>
                		<div class="container-fluid">
	                        <form>
	                              <div class="form-row">
	                                <div class="form-group col-md-6">
	                                  <label for="inputEmail4">Email</label>
	                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
	                                </div>
	                                <div class="form-group col-md-6">
	                                  <label for="inputPassword4">Password</label>
	                                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
	                                </div>
	                              </div>
	                              <div class="form-group">
	                                <label for="inputAddress">Address</label>
	                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
	                              </div>
	                              <div class="form-group">
	                                <label for="inputAddress2">Address 2</label>
	                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
	                              </div>
	                              <div class="form-row">
	                                <div class="form-group col-md-6">
	                                  <label for="inputCity">City</label>
	                                  <input type="text" class="form-control" id="inputCity">
	                                </div>
	                                <div class="form-group col-md-4">
	                                  <label for="inputState">State</label>
	                                  <select id="inputState" class="form-control">
	                                    <option selected>Choose...</option>
	                                    <option>...</option>
	                                  </select>
	                                </div>
	                                <div class="form-group col-md-2">
	                                  <label for="inputZip">Zip</label>
	                                  <input type="text" class="form-control" id="inputZip">
	                                </div>
	                              </div>
	                              <div class="form-group">
	                                <div class="form-check">
	                                  <input class="form-check-input" type="checkbox" id="gridCheck">
	                                  <label class="form-check-label" for="gridCheck">
	                                    Check me out
	                                  </label>
	                                </div>
	                              </div>
	                              <button type="submit" class="btn btn-primary">INSERER</button>
	                              <button type="submit" class="btn btn-primary">MODIFIER</button>
	                        </form>
                    	</div>
                </div>
            </div>
        </div>
        
    </body>
</html>