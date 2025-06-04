function validateForm() {
    document.getElementById("validatetitle").textContent = "";
    document.getElementById("validatedate").textContent = "";
    document.getElementById("validatefrom_time").textContent = "";
    document.getElementById("validateto_time").textContent = "";
    document.getElementById("validateparticulars").textContent = "";
    document.getElementById("validatefaculty").textContent = "";

    var title = document.getElementById("Title").value;
    var date = document.getElementById("Date").value;
    var from_time = document.getElementById("From_Time").value;
    var to_time = document.getElementById("To_Time").value;
    var particulars = document.getElementById("Particulars").value;
    var faculty = document.getElementById("Faculty").value;

    var flag = true;

    if (title == "Null") {
        document.getElementById("validatetitle").textContent = "Please Select Title";
        document.getElementById("Title").style.border = "1px solid red";
        flag = false;
    }

    if (date == "") {
        document.getElementById("validatedate").textContent = "Please Select Date";
        document.getElementById("Date").style.border = "1px solid red";
        flag = false;
    }

    if (from_time == "") {
        document.getElementById("validatefrom_time").textContent = "Please Select From Time";
        document.getElementById("From_Time").style.border = "1px solid red";
        flag = false;
    }

    if (to_time == "") {
        document.getElementById("validateto_time").textContent = "Please Select To Time";
        document.getElementById("To_Time").style.border = "1px solid red";
        flag = false;
    }

    if (particulars == "") {
        document.getElementById("validateparticulars").textContent = "Please Enter Particulars";
        document.getElementById("Particulars").style.border = "1px solid red";
        flag = false;
    }

    if (faculty == "") {
        document.getElementById("validatefaculty").textContent = "Please Enter Faculty";
        document.getElementById("Faculty").style.border = "1px solid red";
        flag = false;
    }

    return flag;
}

function clearValidation() {
    document.getElementById("validatetitle").textContent = "";
    document.getElementById("Title").style.border = "1px solid green";
}

function clearvalidatedate() {
    document.getElementById("validatedate").textContent = "";
    document.getElementById("Date").style.border = "1px solid green";
}

function clearvalidatefrom_time() {
    document.getElementById("validatefrom_time").textContent = "";
    document.getElementById("From_Time").style.border = "1px solid green";
}

function clearvalidateto_time() {
    document.getElementById("validateto_time").textContent = "";
    document.getElementById("To_Time").style.border = "1px solid green";
}

function clearvalidateparticulars() {
    document.getElementById("validateparticulars").textContent = "";
    document.getElementById("Particulars").style.border = "1px solid green";
}

function clearvalidatefaculty() {
    document.getElementById("validatefaculty").textContent = "";
    document.getElementById("Faculty").style.border = "1px solid green";
}

// title
function autofillCourseCode() {
    var titleSelect = document.getElementById("Title");
    var selectedOption = titleSelect.options[titleSelect.selectedIndex];

    var courseCode = selectedOption.getAttribute("data-course-code");
    var commencingDate = selectedOption.getAttribute("data-commencing-date");

    document.getElementById("Course_Code").value = courseCode;
    document.getElementById("Commencing_Date").value = commencingDate;
}