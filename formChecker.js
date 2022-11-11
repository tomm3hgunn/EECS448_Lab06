// validate input is not empty and greater than 0
function validateInput(input) {
    return input !== "" && input >= 0;
}

// validate username is a valid email
function validateEmail(email) {
    return email !== "" && email.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/);
}

// validate password is not blank and is at least 8 characters
function validatePassword(password) {
    return password !== "" && password.length >= 8;
}
// reset all values to default
function resetValues() {
    document.getElementById("username").value = "";
    document.getElementById("password").value = "";
    document.getElementById("shipping").value = "";
    document.getElementById("quantity").value = "";
    document.getElementById("total").innerHTML = "";
}

// use all validation functions to check if all inputs are valid on submit
function validateForm() {
    // test click
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    // get radio button clicked of shipping
    var shipping = document.querySelector('input[name="shipping"]:checked')?.value;
    // get quantity of input item1
    var shirtQuant = document.getElementById("item1").value;
    // get quantity of input item2
    var pantsQuant = document.getElementById("item2").value;
    // get quantity of input item3
    var shoesQuant = document.getElementById("item3").value;

    if (!validateEmail(username)) {
        alert("Username must be a valid email address");
        return false;
    }

    if (!validatePassword(password)) {
        alert("Password must be at least 8 characters");
        return false;
    }

    // if shipping is undefined, then no radio button was clicked
    if (shipping === undefined) {
        alert("Please select a shipping option");
        return false;
    }

    if (!validateInput(shirtQuant)) {
        alert("Shirt quantity must be greater than or equal to 0");
        return false;
    }

    if (!validateInput(pantsQuant)) {
        alert("Pants quantity must be greater than or equal to 0");
        return false;
    }

    if (!validateInput(shoesQuant)) {
        alert("Shoes quantity must be greater than or equal to 0");
        return false;
    }

    return true;
}
