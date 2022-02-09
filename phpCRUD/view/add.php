     <?php
   
    include_once '../controller/post.php';  
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>New User</title>
  </head>
  <body>
<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create New User</h2>
              <!--  action that links to post.php with the method post -->
              <form action='../controller/post.php'method="post">

                <div class="form-outline mb-4">
                  <!-- four inputs that are labeled and sent to post.php -->
                  <input type="text" name="firstname" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Firstname</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="lastname" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Lastname</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="username" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Username</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Email</label>
                </div>         
                         
                <div class="d-flex justify-content-center">
                  <!--  button named 'ok' that submits the form to post.php -->
                  <button type="submit" name="ok" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>