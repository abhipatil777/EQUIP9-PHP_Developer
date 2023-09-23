// JavaScript for the "View" Button
function viewLocations() {
    // Use AJAX to fetch data from view_locations.php
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "view_locations.php", true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Display the results in the "view-results" div
            document.getElementById("view-results").innerHTML = xhr.responseText;
        }
    };

    xhr.send();
}

// model js 

    // JavaScript for the "Save" Button
    function saveLocation(event) {
        event.preventDefault(); // Prevent the default form submission
        // Your code to handle the "Save" button click
    }

    // JavaScript for the "Update" Button
    function updateLocation(event) {
        event.preventDefault(); // Prevent the default form submission
        // Your code to handle the "Update" button click
    }

    // JavaScript for the "View" Button
    function viewLocations(event) {
        event.preventDefault(); // Prevent the default form submission
        // Your code to handle the "View" button click
    }

    // Function to display the modal with a message
function showModal(message) {
    var modal = document.getElementById("myModal");
    var modalMessage = document.getElementById("modalMessage");
  
    modal.style.display = "block";
    modalMessage.innerHTML = message;
  }
  
  // Function to close the modal
  function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }
  
  // JavaScript for the "Save" Button (example)
  function saveLocation(event) {
    event.preventDefault(); // Prevent the default form submission
    
    // Perform the save operation here
    // ...
  
    // Show a success message in the modal
    showModal("Location saved successfully.");
  }
  
  // JavaScript for the "Update" Button (example)
  function updateLocation(event) {
    event.preventDefault(); // Prevent the default form submission
    
    // Perform the update operation here
    // ...
  
    // Show a success message in the modal
    showModal("Location updated successfully.");
  }
  
  // JavaScript for the "View" Button (example)
  function viewLocations(event) {
    event.preventDefault(); // Prevent the default form submission
    
    // Perform the view operation here
    // ...
  
    // Show a success message in the modal
    showModal("Locations retrieved successfully.");
  }
  