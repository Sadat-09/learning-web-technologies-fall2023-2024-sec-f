function name(){
    let username=document.getElementById('username').value;

    let A = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 

let f2 = 1; 

for (let i = 0; i < username.length; i++) {
    let characterValid = false;
    for (let j = 0; j < A.length; j++) {
        if (username[i] === A[j]) {
            characterValid = true;
            break; 
        }
    }
    if (!characterValid) {
        f2 = 0;
        break; 
    }
}

if(username == ''){
    document.getElementById('h1').innerHTML = 'null username!';                    
}

else if (f2 === 0) {
    document.getElementById('h1').innerHTML = 'Invalid Username';
}

else if (username.length < 2) {
    document.getElementById('h1').innerHTML = 'Please Enter at least 2 characters';
}
    
else{
        document.getElementById('h1').innerHTML = username;
    }
}