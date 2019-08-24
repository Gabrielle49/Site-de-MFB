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

                	<h2 class="titleBack"><i class="material-icons">create</i>Insertion Modele</h2>
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