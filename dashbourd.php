<?php 
  include "inc/header.php";
?>
<br>

<div class="container mt-3">
<a href="addUser.php" class="btn btn-primary mb-2 ">Add User</a>
  <div class="table">
    <table class="table table-bordered " style="border: 1px solid black;">
      <thead>
        <tr>
          <th>ID</th>
          <th>User Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>City</th>
          <th>Action</th>
         
        </tr>
      </thead>
      <tbody id="table_body">
        
      </tbody>
    </table>
  </div>
</div>

<script src="./public/js/app.js"></script>

<?php include "inc/footer.php";?>