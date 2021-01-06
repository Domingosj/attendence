
<?php
$title= "Home Page";
require_once 'includes/header.php';
require_once 'db/conn.php';
?>
  <!--
  First Name
  Last Name
  Date of Birth
  Speciality
  Email address
  Contact number
  -->

<div class="container">


    <h1>Registration for IT Conference</h1>

    <form method="post" action="success.php">

      <div class="mb-3">
        <label for="FirstName" class="form-label"> First Name</label>
        <input type="text" class="form-control" id="FirstName" name="firstname">
      </div>

      <div class="mb-3">
        <label for="LastName" class="form-label"> Lat Name</label>
        <input type="text" class="form-control" id="LastName" name="lastname">
      </div>

      <div class="mb-3">
        <label for="dob" class="form-label">Date of Birt</label>
        <input type="date" class="form-control" id="dob" name="dob">
      </div>

      <div class="mb-3">
        <label for="Specialty" class="form-label">Area of Expertise</label>
        <select class="form-select" id="Specialty" name="specialty">
          <option value="1">Database Admin</option>
          <option value="2">Software Developer</option>
          <option value="3">Web Administrator</option>
          <option value="4">Other</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" >
      </div>

      <div class="mb-3">
        <label for="ContactNumber" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="ContactNumber" name="contact">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

    </div>


<?php require_once 'includes/footer.php'; ?>
