function gender(){
    let gender=document.getElementById('gender').value;
    if(gender == ''){
        document.getElementById('h1').innerHTML = 'null Gender!';                    
    }
    else{
        document.getElementById('h1').innerHTML = gender;
    }


}