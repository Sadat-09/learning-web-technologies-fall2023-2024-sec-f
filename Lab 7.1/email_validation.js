function email(){
    let email=document.getElementById('email').value;

let fe = 0; 

for (let i = 0; i < email.length; i++) {
    if (email[i] === '@') {
        fe = 1;
        break; 
    }
}
if(email == ''){
    document.getElementById('h1').innerHTML = 'null Email!';                    
}

if (fe === 0) {
    console.log("Email should contain @");
}

    else{
        document.getElementById('h1').innerHTML = email;
    }

}