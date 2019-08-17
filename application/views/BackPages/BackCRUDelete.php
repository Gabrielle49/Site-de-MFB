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
                            <a class="nav-link" href="#">Liste et Suppression</a>
                        </li>
                     </ul>
                   </nav>
               </div>
               <div class="col-md-10">
                <h2 class="titleBack"><i class="material-icons">list</i>Liste</h2>
                 <table class="table" style="width:100%">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                              <th width="80" scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                              <td><a href="BackCrud.php"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Modifier">edit</i></a><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Supprimer">delete</i></a></td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                              <td><a href="BackCrud.php"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Modifier">edit</i></a><a href="#"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Supprimer">delete</i></a></td>
                            </tr>              
                          </tbody>
                 </table>
               </div>
            </div>
            <div class="row">
                <div class="col-md-10" id="pagination">
                    <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!---Modal----->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Supprimer les éléments sélectionnés</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			       	Voulez-vous vraiment supprimer cet élément du liste?
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
		</div>
    </body>
    </html>