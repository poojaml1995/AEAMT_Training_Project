function validateForm() {
    document.getElementById("validatetitle").textContent = "";
    document.getElementById("validateoverview").textContent = "";
    document.getElementById("validatefocussed_areas").textContent = "";
    document.getElementById("validatekey_takeaways").textContent = "";
    document.getElementById("validatetargeted_audience").textContent = "";
    document.getElementById("validatefaculty").textContent = "";
    document.getElementById('validatefaculty_name').textContent = "";
    document.getElementById('validatefaculty_email').textContent = "";
    document.getElementById('validatefaculty_mobile_no').textContent = "";
    // document.getElementById('validatecourse_pdf_file').textContent = "";


    var title = document.getElementById("Title").value;
    var overview = document.getElementById("Overview").value;
    var focussed_areas = document.getElementById("Focussed_Areas").value;
    var key_takeaways = document.getElementById("Key_Takeaways").value;
    var targeted_audience = document.getElementById("Targeted_Audience").value;
    var faculty = document.getElementById("Faculty").value;
    var faculty_name = document.getElementById('Faculty_Name').value;
    var faculty_email = document.getElementById('Faculty_Email').value;
    var faculty_mobile_no = document.getElementById('Faculty_Mobile_No').value;
    // var course_pdf_file = document.getElementById('Course_Pdf_File').value;


    var flag = true;

    if (title === "Null") {
        document.getElementById("validatetitle").textContent = "Please Enter Title";
        document.getElementById("Title").style.border = "1px solid red";
        flag = false;
    }

    if (overview === "") {
        document.getElementById("validateoverview").textContent = "Please Enter Overview";
        document.getElementById("Overview").style.border = "1px solid red";
        flag = false;
    }

    if (focussed_areas === "") {
        document.getElementById("validatefocussed_areas").textContent = "Please Enter Focussed Areas";
        document.getElementById("Focussed_Areas").style.border = "1px solid red";
        flag = false;
    }

    if (key_takeaways === "") {
        document.getElementById("validatekey_takeaways").textContent = "Please Enter Key Takeaways";
        document.getElementById("Key_Takeaways").style.border = "1px solid red";
        flag = false;
    }

    if (targeted_audience === "") {
        document.getElementById("validatetargeted_audience").textContent = "Please Enter Targeted Audience";
        document.getElementById("Targeted_Audience").style.border = "1px solid red";
        flag = false;
    }

    if (faculty === "") {
        document.getElementById("validatefaculty").textContent = "Please Enter Faculty";
        document.getElementById("Faculty").style.border = "1px solid red";
        flag = false;
    }

    if (faculty_name === "") {
        document.getElementById('validatefaculty_name').textContent = "Please Select Course Pdf File";
        document.getElementById('Faculty_Name').style.border = "1px solid red";
        flag = false;
    }

    if (faculty_email === "") {
        document.getElementById('validatefaculty_email').textContent = "Please Select Course Pdf File";
        document.getElementById('Faculty_Email').style.border = "1px solid red";
        flag = false;
    } 

    if (faculty_mobile_no === "") {
        document.getElementById('validatefaculty_mobile_no').textContent = "Please Select Course Pdf File";
        document.getElementById('Faculty_Mobile_No').style.border = "1px solid red";
        flag = false;
    } 

    // if (course_pdf_file === "") {
    //     document.getElementById('validatecourse_pdf_file').textContent = "Please Select Course Pdf File";
    //     document.getElementById('Course_Pdf_File').style.border = "1px solid red";
    //     flag = false;
    // }


    return flag;
}

function clearValidation() {
    document.getElementById("validatetitle").textContent = "";
    document.getElementById("Title").style.border = "1px solid green";
}

function clearvalidateoverview() {
    document.getElementById("validateoverview").textContent = "";
    document.getElementById("Overview").style.border = "1px solid green";
}

// function clearvalidatefocussed_areas() {
//     document.getElementById("validatefocussed_areas").textContent = "";
//     document.getElementById("Focussed_Areas").style.border = "1px solid green";
// }

function clearvalidatefocussed_areas() {
    document.getElementById("validatefocussed_areas").textContent = "";
    document.getElementById("Focussed_Areas").style.border = "1px solid green";
}


function clearvalidatekey_takeaways() {
    document.getElementById("validatekey_takeaways").textContent = "";
    document.getElementById("Key_Takeaways").style.border = "1px solid green";
}

function clearvalidatetargeted_audience() {
    document.getElementById("validatetargeted_audience").textContent = "";
    document.getElementById("Targeted_Audience").style.border = "1px solid green";
}

function clearvalidatefaculty() {
    document.getElementById("validatefaculty").textContent = "";
    document.getElementById("Faculty").style.border = "1px solid green";
}

function clearvalidatefaculty_name() {
    document.getElementById('validatefaculty_name').textContent = "";
    document.getElementById('Faculty_Name').style.border = "1px solid green";
}

function clearvalidatefaculty_email() {
    document.getElementById('validatefaculty_email').textContent = "";
    document.getElementById('Faculty_Email').style.border = "1px solid green";
}

function clearvalidatefaculty_mobile_no() {
    document.getElementById('validatefaculty_mobile_no').textContent = "";
    document.getElementById('Faculty_Mobile_No').style.border = "1px solid green";
}

// function clearvalidatecourse_pdf_file() {
//     document.getElementById('validatecourse_pdf_file').textContent = "";
//     document.getElementById('Course_Pdf_File').style.border = "1px solid green";
// }


// Autofill Course Code
function autofillCourseCode() {
    var titleSelect = document.getElementById("Title");
    var selectedOption = titleSelect.options[titleSelect.selectedIndex];
    var courseCode = selectedOption.getAttribute("data-course-code");

    document.getElementById("Course_Code").value = courseCode;
}
