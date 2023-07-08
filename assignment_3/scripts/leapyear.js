document
  .querySelector("#submitForm")
  .addEventListener("click", function (event) {
    let form = document.getElementById("leapYearForm");
    let inputs = form.querySelectorAll("input");
    let allValid = true;

    inputs.forEach(function (input) {
      if (!input.checkValidity()) {
        input.classList.add("is-invalid");
        allValid = false;
      } else {
        input.classList.remove("is-invalid");
        input.classList.add("is-valid");
      }
    });

    if (allValid) {
      form.submit();
    }
  });
