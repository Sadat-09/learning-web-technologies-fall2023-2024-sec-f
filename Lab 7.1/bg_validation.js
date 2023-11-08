function validateBG(){
    let BG=document.getElementById('bg').value;
    if(BG == ''){
        document.getElementById('h1').innerHTML = 'enter Blood group!';                    
    }
    else{
        document.getElementById('h1').innerHTML = BG;
    }


}