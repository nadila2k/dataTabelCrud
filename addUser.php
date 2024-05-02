<?php include "inc/header.php"; ?>
<div class="pt-5">
  <div class="container mt-3">

    <form id="form">
      <div class="mb-3 mt-3">
        <label for="userName">Name</label>
        <input type="text" class="form-control" id="userName" placeholder="Enter User Name" name="userName">
      </div>
      <div class="mb-3">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
      </div>
      <div class="mb-3">
        <label for="mobile">Mobile:</label>
        <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile">
      </div>
      <div class="mb-3">
        <label for="city">City:</label>
        <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <!-- Consider using <a> tag for back button -->
      <a href="#" class="btn btn-primary">Back</a>
    </form>
  </div>
</div>

<script>
  const form = document.getElementById("form");
  form.addEventListener('submit', async function(e) {
    e.preventDefault();

    // Get all form data
    const name = document.getElementById('userName').value;
    const email = document.getElementById('email').value;
    const mobile = document.getElementById('mobile').value;
    const city = document.getElementById('city').value;

    // Create a data object
    const data = {
      name: name,
      email: email,
      mobile: mobile,
      city: city
    };
    console.log(data);

    // Make fetch request 
    const response = await fetch('http://localhost:3000/addUserCode.php', {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(data),
    });

    const responseData = await response.json();
    alert(responseData.message)
  })
</script>
<?php include "inc/footer.php"; ?>