document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  form.addEventListener("submit", function (event) {
  const attendanceInput = document.getElementsByName("student_attendance")[0];
  const ageInput = document.getElementsByName("student_age")[0];

          // Validate student_attendance (accepts only 0 or 1)
          if (attendanceInput.value !== "0" && attendanceInput.value !== "1") {
            alert("Attendance must be either 0 or 1.");
            event.preventDefault(); // Prevent form submission
          }

          // Validate student_age (accepts values less than or equal to 25)
          const age = parseInt(ageInput.value);
          if (isNaN(age) || age > 25) {
            alert("Age must be a number less than or equal to 25.");
            event.preventDefault(); // Prevent form submission
          }
          
        });
      });
