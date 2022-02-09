
<?php

include_once('model/qUser.php');
    // (new Q_User) : creates a new obj from the qUser class
    //->getAllUsers) : using the function from the new obj and using it to get all the users information from the DB
$allUsers = (new Q_User)->getAllUsers();
//var_dump($allUsers);
//$allUsers contains all the users information from the DB

?>
  <h1 class="text-danger">Users</h1>
   <!--button link to view/add.php  -->
  <a href='view/add.php'>
  <button type="submit" class="btn btn-success">+New User</button>
</a> 
  
<table class="table table-striped table-hover">
  <thead>
    <tr>  
    <th scope="col">Id</th>    
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody> 
  <!-- using foreach to capture the values and print out all users in a table    -->
  <?php foreach ($allUsers as $key => $value) : ?>
        <td>  <?php  echo  $value->getId() ?></td>
        <td>  <?php  echo  $value->getFirstname()  ?></td>
        <td>  <?php  echo  $value->getLastname() ?></td>
        <td>  <?php  echo  $value->getUsername() ?></td>
        <td>  <?php  echo  $value->getEmail() ?></td>
        
        <td>
          <!--  button that links to view/v_read.php and pass on the id of the user in the url -->
          <a href="view/v_read.php?id=<?php echo $value->getId()?>">
            <button type="submit" class="btn btn-primary">Read</button>
          </a>
        </td>
        <td>
          <!--  button that links to view/v_edit.php and pass on the id of the user in the url -->
          <a href="view/v_edit.php?id=<?php echo $value->getId()?>">
          <button type="submit" class="btn btn-warning">Edit</button>
          </a>
        </td>
        <td>
          <!--  button that links to view/v_delete.php and pass on the id of the user in the url -->
        <a href="view/v_delete.php?id=<?php echo $value->getId()?>">
        <button type="submit" class="btn btn-danger">Delete</button>
          </a>          
                    
        </td>             
       
       <tr>

  <?php endforeach ?>  
 
  </tbody>
</table>