        <div class="my-container container">
            <div class="row">
                <div class ="col-md-4 col-sm-12 col-lg-4">
                    <h2 class="question">Avez-vous des questions ?</h2>
                    <img src="<?php echo base_url('assets/images/question.png');?>" class="image"/> 
                    <button type="button" class="btn btn-success" id="bouton" data-toggle="button" aria-pressed="false" autocomplete="off">
                        #VOIR LES QUESTIONS
                     </button>  
                </div>
                <div class="col-md-8 col-sm-8 col-lg-8" id="input">
                    <form>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                         
                          <button type="submit" class="btn btn-success btn-lg btn-block" id="validation">Valider</button>
                    </form>                
                </div>
            </div>
          
        </div>
        