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
    <body id="wawa">
        <script type="text/javascript">
            $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
        <div class="container-fluid" style="margin-top: 50px;">
            <div class="row">
                <div class="col-md-2">
                    <div class="accordion" id="myAccordion" >
                        <div class="card">
                            <div class="card-header" id="headingOne"  style="background-color:RGBa(255,255,255,0.5);opacity:0,33;">
                                <h2 class="mb-0">
                                    <img src="<?php echo base_url ('assets/images/owner.jpg')?>" style="display:inline;"/>
                                    <p style="text-align: center;">Utilisateur 1</p>
                                </h2>
                            </div>
                            
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><img src="<?php echo base_url('assets/images/dashboard.png');?>"></button>
                                </h2>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><img src="<?php echo base_url('assets/images/liste.png');?>"></button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#myAccordion">
                                <div class="card-body">
                                    <p><a href="<?=site_url("BackController/getListe");?>">Liste 1</a></p>
                                    <p><a href="#">Liste 2</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><img src="<?php echo base_url('assets/images/insertion.png');?>"></button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#myAccordion">
                               <div class="card-body">
                                    <p><a href="<?=site_url("BackController/getInsertInterface");?>">Insertion 1</a></p>
                                    <p><a>Insertion 2</a></p>
                                    <p><a>Insertion 3</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10" style="background-color:RGBa(255,255,255,0.5);" >
                    <!--<div id="donutchart" style="width: 900px; height: 500px;"></div>-->
                    <div class="input-group " style="margin-top: 10px;">
                      <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Recherche">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                      </div>
                    </div>
                        <div class="row">
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