<?php
    include_once '../controller/post.php'; 
    include_once ('../model/qUser.php');
    //$_GET['id'] : catching id from url 
    // (new Q_User) : creates a new obj from the qUser class
    //->getUserById : using the function from the new obj and using it to get all the user information from the DB
   $getUser = (new Q_User)->getUserById($_GET['id']);
  //$getUser contains all the user information from the DB
  //using foreach to capture the values and save them into variables
?>       
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Delete User</title>
  </head>
  <body>
<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Delete User</h2>
            <!--  action that links to post.php and pass on id from url with the method post -->
              <form action="../controller/post.php?id=<?php echo $_GET['id']?>" method="post">

                <div class="form-outline mb-4">
                  <!-- four inputs that are labeled and sent to post.php -->
                  <!-- the form already contains the user information from the DB thanks to the variables -->
                  <input type="text" name="firstname" value="<?php echo $getUser->getFirstname() ?> " class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Firstname</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="lastname" value="<?php echo $getUser->getLastname() ?> "  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Lastname</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="username" value="<?php echo $getUser->getUsername() ?> "  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Username</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="email" name="email" value="<?php echo $getUser->getEmail() ?> "  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Email</label>
                </div>         
                         
                <div class="d-flex justify-content-center">
                   <!--  button named 'delete' that submits the form to post.php -->
                <button type="submit" name="delete" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Delete User</button>
                  
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