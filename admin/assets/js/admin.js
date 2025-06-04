function validateForm() {
    document.getElementById("validateusername").textContent = "";
    document.getElementById("validatepassword").textContent = "";

    var username = document.getElementById("UserName").value;
    var password = document.getElementById("Password").value;

    var flag = true;

    if (username == "") {
        document.getElementById("validateusername").textContent = "Please Enter User Name";
        document.getElementById("UserName").style.border = "1px solid red";
        flag = false;
    }

    if (password == "") {
        document.getElementById("validatepassword").textContent = "Please Enter Password";
        document.getElementById("Password").style.border = "1px solid red";
        flag = false;
    }

    return flag;
}

function clearvalidateusername() {
    document.getElementById("validateusername").textContent = "";
    document.getElementById("UserName").style.border = "1px solid green";
}

function clearvalidatepassword() {
    document.getElementById("validatepassword").textContent = "";
    document.getElementById("Password").style.border = "1px solid green";
}
