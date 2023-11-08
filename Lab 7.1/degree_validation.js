function Degree(){
    let degree=document.getElementById('degree').value;
    if(degree == ''){
        document.getElementById('h1').innerHTML = 'null Degree!';                    
    }
    else{
        document.getElementById('h1').innerHTML = degree;
    }


}