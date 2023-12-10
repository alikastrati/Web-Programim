function validateForm() {
    resetErrorMessages();


    let name = document.getElementById('name').value;
    if (name.length < 2 || /\d/.test(name)) {
      showError('nameError', 'Name must be at least 2 characters long and cannot contain numbers.');
    }

    
    let surname = document.getElementById('surname').value;
    if (surname.length < 2 || /\d/.test(surname)) {
      showError('surnameError', 'Surname must be at least 2 characters long and cannot contain numbers.');
    }

    
    let email = document.getElementById('email').value;
    let emailRegex = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/;
    if (!email.match(emailRegex)) {
      showError('emailError', 'Invalid email format.');
    }

    
    let confirmEmail = document.getElementById('confirmEmail').value;
    if (confirmEmail !== email) {
      showError('confirmEmailError', 'Emails do not match.');
    }

    
    let password = document.getElementById('password').value;
    if (password.length < 6 || !/\d/.test(password)) {
      showError('passwordError', 'Must be at least 6 characters long and contain at least one number.');
    }

    
    let confirmPassword = document.getElementById('confirmPassword').value;
    if (confirmPassword !== password) {
      showError('confirmPasswordError', 'Passwords do not match.');
    }
  }

  function showError(errorId, errorMessage) {
    let errorElement = document.getElementById(errorId);
    errorElement.textContent = errorMessage;
  }

  function resetErrorMessages() {
    let errorElements = document.querySelectorAll('.error-box');
    errorElements.forEach((element) => {
      element.textContent = '';
    });
  }

  
  document.getElementById('name').addEventListener('input', function () {
    validateForm();
  });

  document.getElementById('surname').addEventListener('input', function () {
    validateForm();
  });

  document.getElementById('email').addEventListener('input', function () {
    validateForm();
  });

  document.getElementById('confirmEmail').addEventListener('input', function () {
    validateForm();
  });

  document.getElementById('password').addEventListener('input', function () {
    validateForm();
  });

  document.getElementById('confirmPassword').addEventListener('input', function () {
    validateForm();
  });