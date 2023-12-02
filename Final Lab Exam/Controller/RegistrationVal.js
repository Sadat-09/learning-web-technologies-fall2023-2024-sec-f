function abc() {
    let username = document.getElementById('username').value;
    let name = document.getElementById('name').value;
    let password = document.getElementById('password').value;
    let email = document.getElementById('email').value;
    let role = document.getElementById('role').value;
    let ConfirmPassword = document.getElementById('confirm_password').value;
    let fe = 0;
    let fn = 0;
    let f = 0;
    let N = "123456789";
    let pattern = "@#$%"; 

    for (let i = 0; i < name.length; i++) {
        for (let j = 0; j < N.length; j++) {
            if (name[i] == N[j]) {
                fn = 1;
                break;
            }
        }
    }

    for (let i = 0; i < password.length; i++) {
        for (let j = 0; j < pattern.length; j++) {
            if (password[i] == pattern[j]) {
                f = 1;
                break;
            }
        }
    }

    if (username == '') {
        alert('NULL Username');
    }

    if (name == "") {
        alert('Provide Name');
    }
    if (fn == 1) {
        alert('Name can\'t contain numbers.');
        return;
    }

    if (password == "") {
        alert('Null Password.');
    }
    if (f == 0) {
        alert('Password must contain at least one of the special characters (@, #, $, %)');
        return;
    }

    if (password != ConfirmPassword) {
        alert('Passwords should be the same!');
    }

    for (let i = 0; i < email.length; i++) {
        if (email[i] == '@') {
            fe = 1;
        }
    }

    if (email == "") {
        alert('Null Email');
    }
    if (fe == 0) {
        alert('Email Should Contain @');
    }

    if (role == "") {
        alert('Please Enter Role');
    }
    if (username.length < 5) {
        alert('Username should contain over 5 characters');
    }
}
