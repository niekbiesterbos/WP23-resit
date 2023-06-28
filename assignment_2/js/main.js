function validateForm() {
    console.log("called validate")
    let name = $("#nameField").val();
    let age = $("#ageField").val();
    let city = $("#cityField").val();
    let email = $("#emailField").val();
    let phone = $("#phoneField").val();

    let isValid = true;
    let errorMsg = '';

    if (name === "" || age === "" || city === "" || email === "" || phone === "") {
        isValid = false;
        errorMsg = "All fields should be filled in.";
    } else if (!/^[a-zA-Z\s]*$/.test(name) || !/^[a-zA-Z\s]*$/.test(city)) {
        isValid = false;
        errorMsg = "The Name and City fields should only contain letters.";
    } else if (!/^\d+$/.test(age) || !/^\d+$/.test(phone)) {
        isValid = false;
        errorMsg = "The Age and Phone number fields should only contain numbers.";
    } else if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(email)) {
        isValid = false;
        errorMsg = "The Email address field should match a regular expression for an email address.";
    }

    if (!isValid) {
        $("#form-alert").show().text(errorMsg);
    } else {
        $("#form-alert").hide();
    }

    return isValid;
}

function writeFormData() {
    console.log("called write")
    let name = $("#nameField").val();
    let age = $("#ageField").val();
    let city = $("#cityField").val();
    let email = $("#emailField").val();
    let phone = $("#phoneField").val();

    let formData = `<tr><th>Name</th><td>${name}</td></tr>
                    <tr><th>Age</th><td>${age}</td></tr>
                    <tr><th>City</th><td>${city}</td></tr>
                    <tr><th>Email</th><td>${email}</td></tr>
                    <tr><th>Phone</th><td>${phone}</td></tr>`;

    $("#form-content").show().html(formData);
}


$(document).ready(function () {
    $("form").on("submit", function (event) {
        event.preventDefault();
        if (validateForm()) {
            writeFormData();
        }
    });

    // Assuming your reset button has an id of 'resetButton'
    $("#resetButton").click(function () {
        $("#nameField").val("");
        $("#ageField").val("");
        $("#cityField").val("");
        $("#emailField").val("");
        $("#phoneField").val("");
        $("#form-alert").hide();
        $("#form-content").hide();
    });
});
