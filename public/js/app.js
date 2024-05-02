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
             <button class="btn btn-primary">Edit</button>
             <button class="btn btn-primary">Delete</button>
         </td>`;
  });

  tableBody.innerHTML = htmlStr;
}

// Document onload
document.addEventListener("DOMContentLoaded", async function () {
  console.log("Page is loaded");

  fetchUserData();
});
