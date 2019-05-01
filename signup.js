function Validation(){
    var name = document.forms["Form"]["username"];
    var pass = document.forms["Form"]["password"];
    var Cpass = document.forms["Form"]["cpass"];

    if(name.value==""){
        window.alert("Enter Your Name!");
        name.focus();
        return false;
    }
    else if(pass.value==""){
        window.alert("Enter Your Password!");
        pass.focus();
        return false;
    }
    else if((pass.value).length < "8"){
        window.alert("Minimum Password length must be 8!");
        pass.focus();
        return false;
    }
    else if(Cpass.value==""){
        window.alert("Enter Confirm password!");
        Cpass.focus();
        return false;
    }
    else if(Cpass.value != pass.value){
        window.alert("Both Passwords must be same!");
        Cpass.focus();
        return false;
    }

    return true;
}

function aValidation(){
    var title = document.forms["askform"]["title"];
    var msg = document.forms["askform"]["message"];

    if(title.value==""){
        window.alert("You must enter a Title!");
        title.focus();
        return false;
    }

    if(msg.value==""){
        window.alert("You must enter a Description!");
        msg.focus();
        return false;
    }

    return true;
}