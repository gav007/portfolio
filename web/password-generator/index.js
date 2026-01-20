const btnE1 = document.querySelector(".btn");
const inputElement = document.getElementById("input");
const copyIconElement = document.querySelector(".fa-copy");
const alertContainer = document.querySelector(".alert-container");

btnE1.addEventListener("click", ()=>{
    createPassword();
});

copyIconElement.addEventListener("click",()=>{
    //function
    copyPassword();
    if (inputElement.value) {
        alertContainer.classList.remove("active");
        setTimeout(()=>{
            alertContainer.classList.add("active");
        }, 2000);
    }
    
});

function createPassword(){

    const chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+?:{}[]";

    const passwordLength = 15;
    let password = "";
    
    for (let index = 0; index < passwordLength; index++) {
        const randomNum = Math.floor(Math.random() * chars.length)
        password += chars.substring(randomNum, randomNum + 1);
        
    }

    inputElement.value = password;
    alertContainer.innerText = "'" + password+ "'" + " Copied!";
}

function copyPassword() {
    inputElement.select();
    inputElement.setSelectionRange(0, 9999);
    navigator.clipboard.writeText(inputElement.value);
    

}