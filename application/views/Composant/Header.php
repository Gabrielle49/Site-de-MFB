<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Site de Réformes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/stylesheet.css');?>">
        <script src="<?php echo base_url('assets/js/jquery-3.2.1.slim.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <?php for($i=0;$i<count($listeRubrique);$i++){?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo($listeRubrique[$i]['nomrubrique'])?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php for($j=0;$j<count($listeRubrique[$i][0]);$j++){
                                    if($listeRubrique[$i][0][$j]['nomsousrubrique']=="Historique" || $listeRubrique[$i][0][$j]['nomsousrubrique']=="Missions"){?>
                                        <a class="dropdown-item" href="#accueil">
                                            <?php echo ($listeRubrique[$i][0][$j]['nomsousrubrique']);?> 
                                        </a>  
                                    <?php }
                                    else{
                                        $resultat= str_replace(" ", "_",$listeRubrique[$i][0][$j]['nomsousrubrique']);   ?> 
                                        <a class="dropdown-item" href="<?=site_url('Rubrique1Controller/get'.$resultat);?>">
                                            <?php echo ($listeRubrique[$i][0][$j]['nomsousrubrique']);?> 
                                        </a> 
                                    <?php }?>                      
                                <?php }?> 
                           </div>
                    </li>
                    <?php }?> 
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <?php echo $view;?>
        
        <div class="footer">
            <footer id="sticky-footer" class="py-4 col-md-12 bg-dark text-white-50">
                <div class="container text-center">
                  <small>Copyright &copy; Your Website</small>
                </div>
            </footer>
        </div>
      
    </body>
</html>  