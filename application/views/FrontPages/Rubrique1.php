        <div class="my-container container-fluid">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12" id="titreDoc">
              <h3  class="titre">Liste des Documents</h3>
            </div>
          </div>
        	<div class ="row">
        		<div class = "col-md-2 col-sm-2 col-lg-2" id ="about"> 
        					<div class="card text-white bg-success mb-3" style="max-width: 20rem;">
        					  <div class="card-header">A propos</div>
        					  <div class="card-body">
        						<h4 class="card-title">Secondary card title</h4>
        						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        					</div>
                </div>
				    </div>
				    <div class = "col-md-10 col-sm-8 col-lg-10" id="canvas">
    					<!--<h3 class="title">Liste des Documents</h3>-->
                       <table class="table table-hover">
                          <thead>
                            <tr>
                            </tr>
                          </thead>
                          <tbody>
                            <?php for($i=0;$i<count($listedocument);$i++){?>
                              <tr class="table-active">
                                <th>
                                 <?php echo $listedocument[$i]['nomfichier'];?>
                                     <div class="liste">
                                          <button type="button" class="btn btn-outline-warning d-none d-md-inline">Aperçu</button>
                                          <button type="button" class="btn btn-outline-warning btn-sm d-sm-block d-md-none">
                                            <i class="material-icons">
                                              visibility
                                            </i>
                                          </button>
                                          <button type="button" class="btn btn-outline-success d-none d-md-inline">Telecharger</button>
                                          <button type="button" class="btn btn-outline-success btn-sm d-sm-block d-md-none">
                                              <i class="material-icons">
                                                get_app
                                              </i>
                                          </button>    
                                     </div>
                                </th>
                              </tr>
                            <?php }?>
                          </tbody>
                       </table> 
                         <div id="pagination">
                            <ul class="pagination ">
                              <?php
                              $j = 1; 
                              $i = 0;
                              while($i<($nombredocument[0]['count'])){
                                if($i==0)
                                {?>
                                  <li class="page-item ">
                                    <a class="page-link" href="<?=site_url('Rubrique1Controller/getListeDocument/'.$listedocument[0]['type'].'/0/5');?>"><?php echo ($j); ?></a>
                                  </li>
                                <?php }
                                else{?>
                                  <li class="page-item ">
                                    <a class="page-link" href="<?=site_url('Rubrique1Controller/getListeDocument/'.$listedocument[0]['type'].'/'.($i).'/5');?>"><?php echo ($j); ?></a>
                                  </li>
                                <?php }
                              $i +=5;
                              $j++;?>
                              <?php } ?> 
                            </ul>
                            
                        </div>
                         
				    </div>
          </div>
			  </div>
     