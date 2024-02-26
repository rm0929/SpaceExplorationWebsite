function formValidat(){
    let fieldsValidated = 0;

    const name = document.querySelector(".name").value;
    const email = document.querySelector(".email").value;
    const contact = document.querySelector(".number").value;

    let re1 =  /\w/g;
    fieldsValidated = re1.test(name) ? fieldsValidated+1 : fieldsValidated;
    
    let re2 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    fieldsValidated = re2.test(email) ? fieldsValidated+1 : fieldsValidated;

    fieldsValidated =  contact.length === 10 ? fieldsValidated+1 : fieldsValidated;

    return fieldsValidated;
}

document.querySelector("#subscribe").addEventListener("click", (e) => {
    e.preventDefault();

    let fieldsValidated = formValidat();

    if(fieldsValidated === 3){
        document.querySelector("#contactUs").innerHTML = `<h1 class="success">Subscribed Sucessfully!!!!</h1>`;
    }else{
        alert('Some fields are invalid');
    }
});