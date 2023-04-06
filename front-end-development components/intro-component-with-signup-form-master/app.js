const form = document.querySelector("form");

const userName = document.getElementById("username");

const eMail = document.getElementById("email");

const passwordInput = document.getElementById("password");

const passwordCheck = document.getElementById("password2");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  checkInputs();
});

function checkInputs() {
  const userNameValue = userName.value.trim();
  const emailValue = eMail.value.trim();
  const passwordValue = passwordInput.value.trim();

  const passwordCheckValue = passwordCheck.value.trim();
  //set logic for username field
  if (userNameValue === "") {
    setErrorFor(username, "Username cannot be blank");
  } else {
    setSuccessFor(username);
  }
  //set logic for email input

  if (emailValue === "") {
    setErrorFor(email, "Email cannot be blank");
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "Email is not valid");
  } else {
    setSuccessFor(email);
  }

  //set logic for password input

  if (passwordValue === "") {
    setErrorFor(passwordInput, "Password cannot be blank");
  } else if (passwordInput.value.length <= 5) {
    setErrorFor(passwordInput, "Password can't be less than 5 characters");
  } else {
    setSuccessFor(passwordInput);
  }

  //set logic for passwordCheck

  if (passwordCheckValue === "") {
    setErrorFor(passwordCheck, "Password check cannot be blank");
  } else if (passwordCheckValue !== passwordValue) {
    setErrorFor(passwordCheck, "Passwords doesn't match");
  } else if (passwordCheckValue === passwordValue) {
    passwordMatch(passwordCheck, "Correct passwords");
  } else {
    setSuccessFor(passwordCheck);
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");
  small.innerText = message;
  formControl.className = "form-control error";
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");
  formControl.className = "form-control success";
  small.style.display = "none";
}

function passwordMatch(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");
  formControl.className = "form-control success";
  small.innerText = message;
}

function isEmail(email) {
  return /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/.test(
    email
  );
}
