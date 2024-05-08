document.addEventListener("DOMContentLoaded", function() {
  const userTypeSelect = document.getElementById("userType");
  const semesterDropdown = document.getElementById("semesterDropdown");

  userTypeSelect.addEventListener("change", function() {
      if (userTypeSelect.value === "student") {
          semesterDropdown.style.display = "block";
      } else {
          semesterDropdown.style.display = "none";
      }
  });
});
