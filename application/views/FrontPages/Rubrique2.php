        <div class="my-container container-fluid">
            <div class="row">
                <div class ="col-md-4 col-sm-12 col-lg-4">
                    <h3 class="question">Avez vous des questions ?</h3>
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
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                          </div>
                          <button type="submit" class="btn btn-success">Valider</button>
                    </form>                
                </div>
            </div>
          
        </div>
        