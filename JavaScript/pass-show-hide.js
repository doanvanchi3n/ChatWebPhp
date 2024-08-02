const passField = document.querySelector(".form input[type ='password']"),
togleBtn = document.querySelector(".form .field i");

togleBtn.onclick = ()=> {
    if (passField.type == "password") {
        passField.type = "text";
        togleBtn.classList.add("active");
    } else {
        passField.type = "password";
        togleBtn.classList.remove("active");
    }
}
