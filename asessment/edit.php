<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
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
          <h1 class="text-center">Edit Customer Details</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);

              if (isset($_POST['update'])) {
                if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['address']) && isset($_POST['skills'])&& isset($_POST['designation'])) {
                  if (!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['address']) && !empty($_POST['skills'])&& !empty($_POST['designation']) ) {
                    
                    $data['id'] = $id;
                    $data['name'] = $_POST['name'];
                    $data['age'] = $_POST['age'];
                    $data['address'] = $_POST['address'];
                    $data['skills'] = $_POST['skills'];
                    $data['designation'] = $_POST['designation'];

                    $update = $model->update($data);

                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'records.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'records.php';</script>";
                    }

                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit.php?id=$id");
                  }
                }
              }

          ?>
          <form action="" method="post" class="shadow-lg p-4 mb-4 bg-white "style="width: 500px; height: 500px;">
             <div class="col-md-12 mt-2">
                <img src="images/download.png" class="mx-auto d-block" style="width: 120px; height: 120px;">         
            
          </div>
          <div class="form-group"></div>
            <div class="form-group">
              
              <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
            
              <input type="text" name="age" value="<?php echo $row['age']; ?>" class="form-control" placeholder="Age">
            </div>
            <div class="form-group">
            
              <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control" placeholder="Address">
            </div>
             <div class="form-group">
              
              <input type="text" name="skills" value="<?php echo $row['skills']; ?>" class="form-control" placeholder="skills">
            </div>
             <div class="form-group">
              
              <input type="text" name="designation" value="<?php echo $row['designation']; ?>" class="form-control" placeholder="Designation">
            </div>
            
            <div class="form-group">
              <button type="submit" name="update" class="btn btn-primary btn-lg btn-block">Update </button>
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