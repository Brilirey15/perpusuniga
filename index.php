<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body{
      font-family: fantasy;
    }

    .btn{
        background: blue;
        color: bl; 
        font-size: 18px;
        border-radius: 10px !important;
        height: 45px;
        width: 450px;
      }

    .card-title{
       font-size: 40px;  
       padding-bottom: 50px;
      }

    img{
        padding-left: 100px;
      }

    .form-check-label{
        padding-right: 10px;
      }

    </style>

    <title>FORM LOGIN</title>
  </head>
  <?php
    if(isset($_GET['pesan'])){
    if($_GET['pesan']=='gagal'){
    echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
    }
  }
  ?>
  <body>
    <form action="cek_login.php" method="post">  
  <section class="vh-100"> 
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
       <img src="Partai.jpg "
          class="img-fluid" alt="Phone image "alt="Image" height="150" width="400">
      </div>

      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form>
          <h1 class="card-title text-center">L O G I N</h1>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="username" placeholder="Masukkan Username" class="form-control form-control-lg" />
            <label class="form-label" for="username">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="password" placeholder="Masukkan Password" class="form-control form-control-lg" />
            <label class="form-label" for="password">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" name="remember" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

          <div class="divider d-flex align-items-center my-4"></div>
         
        </form>
      </div>
    </div>
  </div>
</section>
</body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
  
