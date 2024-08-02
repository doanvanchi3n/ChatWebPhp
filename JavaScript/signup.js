const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault(); // preventing form from submitting
}

continueBtn.onclick = () => {
    // let's start Ajax
    let xhr = new XMLHttpRequest();// creating XML object
    xhr.open();
    xhr.onload = ()=>{
    
    }
    xhr.send();
}
