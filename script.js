let form = document.querySelector('form');
let name = document.getElementById("name");
let email = document.getElementById("email");
let firstName = document.getElementById("firstname");
let description = document.getElementById("description");
let errorMessages = document.querySelectorAll('.error');

function validateField(input, message) {
    let errorElement = input.parentElement.querySelector('.error');
    if (!input.value.trim()) {
        errorElement.textContent = message;
        errorElement.classList.add('active');
        errorElement.style.color = "red";
        return false;
    } else {
        errorElement.textContent = "";
        errorElement.classList.remove('active');
        return true;
    }
}


form.addEventListener('submit', function (event) {
    let isValid = true;

    if (!validateField(name, "Le champ Nom est requis.")) isValid = false;
    if (!validateField(firstName, "Le champ Prénom est requis.")) isValid = false;
    if (!validateField(email, "Le champ E-mail est requis.")) isValid = false;
    if (!email.validity.valid) {
        email.nextElementSibling.textContent = "L'adresse e-mail n'est pas valide.";
        email.nextElementSibling.classList.add('active');
        isValid = false;
    }
    if (!validateField(description, "Le champ Description est requis.")) isValid = false;

    if (!isValid) {
        event.preventDefault();
    }
}, false);


