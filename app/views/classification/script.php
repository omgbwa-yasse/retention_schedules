<script>

var listItems = document.getElementsByTagName("li");

for (var i = 0; i < listItems.length; i++) {

  listItems[i].addEventListener("click", function() {
    var childList = this.getElementsByTagName("ol")[0];
    if (childList) {
      if (childList.style.display == "none") {
        childList.style.display = "block";
      } else {
        childList.style.display = "none";
      }
    }
  });
}








// Get the input element
var input = document.getElementById("input");

// Get the datalist element
var datalist = document.getElementById("datalist");

// Get the database module
var mysql = require("mysql");

// Create a connection to the database
var connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "password",
  database: "mydb"
});

// Connect to the database
connection.connect(function(err) {
  if (err) throw err;
  console.log("Connected to the database");
});

// Add an input event listener to the input element
input.addEventListener("input", function() {
  // Get the current value of the input element
  var value = input.value;

  // Clear the datalist options
  datalist.innerHTML = "";

  // Check if the value is not empty
  if (value != "") {
    // Query the database for the elements that match the value
    connection.query("SELECT element FROM list WHERE element LIKE ?", [value + "%"], function(err, result) {
      if (err) throw err;
      console.log("Fetched elements from database");

      // Loop through each element
      for (var i = 0; i < result.length; i++) {
        // Get the element value
        var element = result[i].element;

        // Create a new option element with the element value
        var option = document.createElement("option");
        option.value = element;

        // Append the option element to the datalist element
        datalist.appendChild(option);
      }
    });
  }
});

// Add a change event listener to the input element
input.addEventListener("change", function() {
  // Get the current value of the input element
  var value = input.value;

  // Check if the value is one of the datalist options
  var options = datalist.options;
  for (var i = 0; i < options.length; i++) {
    if (options[i].value == value) {
      // The value is valid, do something with it
      console.log("You selected " + value);
      break;
    }
  }
});













// Get the form element
var form = document.getElementById("myForm");

// Add a submit event listener to the form
form.addEventListener("submit", function(event) {
  // Prevent the default form submission
  event.preventDefault();

  // Get the input elements
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var password = document.getElementById("password");

  // Validate the input values
  var valid = true;

  // Check if the name is empty or contains digits
  if (name.value == "" || /\d/.test(name.value)) {
    // Display an error message and set valid to false
    alert("Please enter a valid name");
    valid = false;
  }

  // Check if the email is empty or does not match the email pattern
  var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (email.value == "" || !emailPattern.test(email.value)) {
    // Display an error message and set valid to false
    alert("Please enter a valid email address");
    valid = false;
  }

  // Check if the password is empty or less than 8 characters
  if (password.value == "" || password.value.length < 8) {
    // Display an error message and set valid to false
    alert("Please enter a password of at least 8 characters");
    valid = false;
  }

  // If all the validations passed, submit the form
  if (valid) {
    form.submit();
  }
});

















// Get the input element
var input = document.getElementById("keyword");

// Get the database module
var mysql = require("mysql");

// Create a connection to the database
var connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "password",
  database: "mydb"
});

// Connect to the database
connection.connect(function(err) {
  if (err) throw err;
  console.log("Connected to the database");
});

// Query the database for the keywords
connection.query("SELECT keyword FROM keyword", function(err, result) {
  if (err) throw err;
  console.log("Fetched keywords from database");

  // Loop through each keyword
  for (var i = 0; i < result.length; i++) {
    // Get the keyword value
    var keyword = result[i].keyword;

    // Create a new option element with the keyword value
    var option = document.createElement("option");
    option.value = keyword;

    // Append the option element to the input element
    input.appendChild(option);
  }
});

// Add a keydown event listener to the input element
input.addEventListener("keydown", function(event) {
  // Check if the key pressed is enter
  if (event.keyCode == 13) {
    // Prevent the default action of submitting the form
    event.preventDefault();

    // Get the current value of the input element
    var value = input.value;

    // Check if the value is not empty and ends with a semicolon
    if (value != "" && value.slice(-1) != ";") {
      // Append a semicolon to the value
      input.value = value + ";";
    }
  }
});















// Get the input element of the first page
var input = document.getElementById("input");

// Create a popup window
var popup = window.open("", "Popup", "width=300,height=200");

// Write some HTML content for the popup window
popup.document.write("<h1>Choose a keyword</h1>");
popup.document.write("<ul id='list'>");
popup.document.write("<li>Apple</li>");
popup.document.write("<li>Banana</li>");
popup.document.write("<li>Cherry</li>");
popup.document.write("</ul>");

// Get the list element of the popup window
var list = popup.document.getElementById("list");

// Add a click event listener to the list element
list.addEventListener("click", function(event) {
  // Get the target element of the click event
  var target = event.target;

  // Check if the target element is a list item
  if (target.tagName == "LI") {
    // Get the text content of the target element
    var text = target.textContent;

    // Set the value of the input element of the first page to the text content
    input.value = text;

    // Close the popup window
    popup.close();
  }
});


















</script> 










