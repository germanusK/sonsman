function setContactForm(n){
    let forms = document.querySelector(".contactFormBox").childNodes;

    forms.forEach((value, key, parent)=>{
        if (key == n-1) {
            value.classList.remove("hidden");
        }
        else
            value.classList.add("hidden");
    })
    return;
}