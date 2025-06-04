function validateForm() {
    document.getElementById("validatecourse_code").textContent = "";
    document.getElementById("validatetitle").textContent = "";
    document.getElementById("validateno_of_days").textContent = "";
    document.getElementById("validatecommencing_from_date").textContent = "";
    document.getElementById("validatecommencing_to_date").textContent = "";
    document.getElementById("validatecourse_fee").textContent = "";
    document.getElementById("validatefaculty").textContent = "";
    document.getElementById('validatecourse_image').textContent = "";

    var course_code = document.getElementById("Course_Code").value;
    var title = document.getElementById("Title").value;
    var no_of_days = document.getElementById("No_of_Days").value;
    var commencing_from_date = document.getElementById("Commencing_from_Date").value;
    var commencing_to_date = document.getElementById("Commencing_to_Date").value;
    var course_fee = document.getElementById("Course_Fee").value;
    var faculty = document.getElementById("Faculty").value;
    var course_image = document.getElementById('Course_Image').value;

    var flag = true;

    if (course_code == "") {
        document.getElementById("validatecourse_code").textContent = "Please Enter Course Code";
        document.getElementById("Course_Code").style.border = "1px solid red";
        flag = false;
    }

    if (title == "") {
        document.getElementById("validatetitle").textContent = "Please Enter Title";
        document.getElementById("Title").style.border = "1px solid red";
        flag = false;
    }

    if (no_of_days == "") {
        document.getElementById("validateno_of_days").textContent = "Please Enter No of Days";
        document.getElementById("No_of_Days").style.border = "1px solid red";
        flag = false;
    }

    if (commencing_from_date == "") {
        document.getElementById("validatecommencing_from_date").textContent = "Please Select Commencing From Date";
        document.getElementById("Commencing_from_Date").style.border = "1px solid red";
        flag = false;
    }

    if (commencing_to_date == "") {
        document.getElementById("validatecommencing_to_date").textContent = "Please Select Commencing To Date";
        document.getElementById("Commencing_to_Date").style.border = "1px solid red";
        flag = false;
    }

    if (course_fee == "") {
        document.getElementById("validatecourse_fee").textContent = "Please Enter Course Fee";
        document.getElementById("Course_Fee").style.border = "1px solid red";
        flag = false;
    }

    if (faculty == "") {
        document.getElementById("validatefaculty").textContent = "Please Enter Faculty";
        document.getElementById("Faculty").style.border = "1px solid red";
        flag = false;
    }

    if (course_image == "") {
        document.getElementById('validatecourse_image').textContent = "Please Select Course Related Image";
        document.getElementById('Course_Image').style.border = "1px solid red";
        flag = false;
    }

    return flag;
}

function clearvalidatecourse_code() {
    document.getElementById("validatecourse_code").textContent = "";
    document.getElementById("Course_Code").style.border = "1px solid green";
}

function clearvalidatetitle() {
    document.getElementById("validatetitle").textContent = "";
    document.getElementById("Title").style.border = "1px solid green";
}

function clearvalidateno_of_days() {
    document.getElementById("validateno_of_days").textContent = "";
    document.getElementById("No_of_Days").style.border = "1px solid green";
}

function clearvalidatecommencing_from_date() {
    document.getElementById("validatecommencing_from_date").textContent = "";
    document.getElementById("Commencing_from_Date").style.border = "1px solid green";
}

function clearvalidatecommencing_to_date() {
    document.getElementById("validatecommencing_to_date").textContent = "";
    document.getElementById("Commencing_to_Date").style.border = "1px solid green";
}

function clearvalidatecourse_fee() {
    document.getElementById("validatecourse_fee").textContent = "";
    document.getElementById("Course_Fee").style.border = "1px solid green";
}

function clearvalidatefaculty() {
    document.getElementById("validatefaculty").textContent = "";
    document.getElementById("Faculty").style.border = "1px solid green";
}

function clearvalidatecourse_image() {
    document.getElementById('validatecourse_image').textContent = "";
    document.getElementById('Course_Image').style.border = "1px solid green";
}
