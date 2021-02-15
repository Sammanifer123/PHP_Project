<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Regisration Form</title>
    <style>
     
      body{
        background-color: #ccf9fc;
      }
      .form-control{
        border-radius: 12px;

      }
      .shadow-lg {
         border-radius: 12px;
      }
      .btn {
         border-radius: 15px;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">Regisration Form</h1>
          <hr style="height: 0px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $insert = $model->insert();

          ?>
        <form action="" method="post" class="shadow-lg p-4 mb-4 bg-white "style="width: 500px; height: 500px;">
          
           <div class="col-md-12 mt-2">
                <img src="images/download.png" class="mx-auto d-block" style="width: 120px; height: 120px;">         
            
          </div>
          <div class="form-group">  </div>

            <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              
              <input type="email" name="email" class="form-control "placeholder="Email">
            </div>
            <div class="form-group">
    
              <input type="text" name="mobile" class="form-control" placeholder="Phone Number">
            </div>
             <div class="form-group">
    
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
    
              <input type="text" name="DOB" class="form-control" placeholder="Birth Date">
            </div>
           
            <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Create Account</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>