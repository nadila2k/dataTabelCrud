console.log("Health ok");

// Fetch user data
async function fetchUserData() {
  // Fetch get request
  const response = await fetch(
    "http://localhost:3000/controller/getAllUserData.php"
  );
  const data = await response.json();
  console.log(data);

  // Target table body
  const tableBody = document.getElementById("table_body");

  let htmlStr = "";

  // Loop data
  data.forEach(function (el) {
    htmlStr += `<tr>
           <td>${el.id}</td>
           <td>${el.name}</td>
           <td>${el.email}</td>
           <td>${el.mobile}</td>
           <td>${el.city}</td>
           <td>
             <button type="button" class="btn btn-primary" onclick="deleteUser(${el.id})">Delete</button>
             <button class="btn btn-primary">Edit</button>
         </td>`;
  });

  tableBody.innerHTML = htmlStr;
}
// delete user

async function deleteUser(id) {
  
   const userId = id;

   const data = {
    id : userId
   }

   const response = await fetch('http://localhost:3000/deleteUserCode.php', {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(data),
  });

  const responseData = await response.json();
    
  if (responseData.status == true) {
    fetchUserData();
  }

}

// Document onload
document.addEventListener("DOMContentLoaded", async function () {
  console.log("Page is loaded");

  fetchUserData();
});
