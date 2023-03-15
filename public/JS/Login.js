
function validateForm() {

 // validasi email
 const email = document.getElementById("email").value;
 const emailRegex = /^\S+@\S+\.\S+$/;
 const emailError = document.getElementById("error-email");
 if(email===""){
  emailError.innerText = "Email cannot be empty"
  return false;
 }
 else if (!emailRegex.test(email)) {
   emailError.innerText = "Email address is invalid";
   return false;
 } else {
   emailError.innerText = "";
 }

//validasi password
const password = document.getElementById("password").value;
const passwordError = document.getElementById("error-pass");
if(password===""){
    passwordError.innerHTML = "Password cannot be empty"
    return false;
  }
  return true;
}
