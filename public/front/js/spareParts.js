let info = document.querySelector('.info');
info.style.display = "none"
const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('typeCar');
const password = document.getElementById('modelCar');
const password2 = document.getElementById('yearCar');
form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
  
    if(usernameValue === '') {
        setError(username, '');
        
    } else {
        setSuccess(username);
    }

    if(emailValue === '') {
        setError(email, '');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, '');
    }else {
        setSuccess(password);
    }

    if(password2Value === '') {
        setError(password2, '');
    }else {
        setSuccess(password2);
    }


    if (usernameValue !== '' && passwordValue !== '' && password2Value !== '' && emailValue !== '') {
        info.style.display = "block"
    }
    
};
































// let x = (() => {
//     'use strict'
//     const forms = document.querySelectorAll('.needs-validation')
//     Array.from(forms).forEach(form => {
//         form.addEventListener('submit', event => {
//             // if (!form.checkValidity()) {
//             //     event.preventDefault()
//             //     event.stopPropagation()
//             // }
//             // form.classList.add('was-validated')
//         },false)
//     })
// })()


// function show() {
//     // if (input.checkValidity() == true) {
//         info.style.display = "block"
//     // } else {
//     //     info.style.display = "none"
//     // }
// }

// // if (x = false) {
// //     info.style.display = "none"
// // } else {

// // }
// console.log(x);
