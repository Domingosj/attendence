
<?php
$title= "Home Page";
require_once 'includes/header.php';
require_once 'db/conn.php';

if(isset($_POST['submit'])){
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $specialty = $_POST['specialty'];

  $isSuccess = $crud->insert($fname,$lname,$dob,$email,$contact,$specialty) ;

  if ($isSuccess) {
    echo "
    <div class='container'>
      <h1 class='text-center text-success' >Congrats, You´ve been successfully registered</h1>
    </div>";
  }
  else {
    echo "
    <div class='container'>
      <h1 class='text-center text-danger' >Own, There was an error processing</h1>
    </div>";  }
}

?>




<?php require_once 'includes/footer.php'; ?>
