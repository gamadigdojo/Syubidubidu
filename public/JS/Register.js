function validateForm() {
  // validasi nama
  const firstName = document.getElementById("firstName").value;
  const lastName = document.getElementById("lastName").value;
  const nameRegex = /^[a-zA-Z]+$/;
  const nameError = document.getElementById("error-first-name");
  const nameError2 = document.getElementById("error-last-name");
  if (!nameRegex.test(firstName)) {
    nameError.innerText = "First name must contain letters only";
    return false;
  } else {
    nameError.innerText = "";
  }
  if (!nameRegex.test(lastName)) {
    nameError2.innerText = "Last name must contain letters only";
    return false;
  } else {
    nameError2.innerText = "";
  }


  // validasi alamat
  const address = document.getElementById("address").value;
  const addressError = document.getElementById("error-address");
  var addressPattern = /^(\w+\s)*(\w+),\s*(\w+\s)*(\w+),\s*(\w|\s)+$/;
  if(address===""){
    addressError.innerText = "Address cannot be empty"
    return false;
  }
  else if (!addressPattern.test(address)) {
    addressError.innerText = "Address is not valid! (format: Province, City, Address detail)";
    return false;
  } else {
    addressError.innerText = "";
  }


  // validasi tanggal lahir
  // const dob = document.getElementById("dob").value;
  // const dobRegex = /^(\d{2})-(\d{2})-(\d{4})$/;
  // const dobError = document.getElementById("error-dob");
  // if(dob===""){
  //   dobError.innerText = "Day of Birth cannot be Empty"
  //   return false;
  // }
  // else {
  //   dobError.innerText = "";
  // }

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

     // validasi nomor telepon
  const phone = document.getElementById("phone").value;
  const phoneRegex = /^\+62\d{9,13}$/;
  const phoneError = document.getElementById("error-tel");
  if(phone===""){
    phoneError.innerText ="Phone number cannot be empty"
    return false;
  }
  else if (!phoneRegex.test(phone)) {
    phoneError.innerText = "Mobile number must be started with '+62'";
    return false;
  } else {
    phoneError.innerText = "";
  }

  // validasi password
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirmPassword").value;
  const passwordRegex =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w\d\s:])([^\s]){8,}$/;
  const passwordError = document.getElementById("error-pass");
  const confirmPasswordError = document.getElementById("confirm-password-error");
  
  if(password===""){
    passwordError.innerHTML = "Password cannot be empty"
    return false;
  }
  else if (password.length < 8) {
    passwordError.innerHTML = "Password must contain at least 8 characters";
    return false;
  }else{
    passwordError.innerText = "";
  }

  if (!passwordRegex.test(password)) {
    passwordError.innerText = "Password must including uppercase, lowercase, number, and special characters";
    return false;
  } else {
    passwordError.innerText = "";
  }
  if (password !== confirmPassword) {
    confirmPasswordError.innerText = "Password does not match";
    return false;
  } else {
    confirmPasswordError.innerText = "";
  }

  return true;
}