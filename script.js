function sendAdminVerificationCode() {

    var email = document.getElementById("e");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {

                alert("Verification Code Has Sent. Please Check Your Inbox");

            } else {
                alert(t);
            }

        }


    }


    r.open("GET", "sendAdminVerifyCodeProcess.php?e=" + email.value, true);
    r.send();

}


function adminVerify() {


    var vc = document.getElementById("vc");

    var f = new FormData();

    f.append("vc", vc.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {
                alert("Verifyed");
                window.location = "adminPanel.php";

            } else {
                alert(t);
            }

        }


    }


    r.open("POST", "adminVerifyProcess.php", true);
    r.send(f);

}


function tRegister() {


    var f = document.getElementById("f").value;
    var l = document.getElementById("l").value;
    var m = document.getElementById("m").value;
    var g = document.getElementById("g").value;
    var e = document.getElementById("e").value;
    var n = document.getElementById("n").value;
    var s = document.getElementById("s").value;
    var gr = document.getElementById("gr").value;

    var form = new FormData();


    form.append("f", f);
    form.append("l", l);
    form.append("m", m);
    form.append("g", g);
    form.append("e", e);
    form.append("n", n);
    form.append("s", s);
    form.append("gr", gr);



    var r = new XMLHttpRequest();


    r.onreadystatechange = function() {


        if (r.readyState == 4) {


            var t = r.responseText;

            if (t == "success") {

                alert("Register Success");
                window.location = "adminPanel.php";

            } else {
                alert(t);
            }

        }


    }


    r.open("POST", "teacherRegisterProcess.php", true);
    r.send(form);

}


function aoRegister() {


    var f = document.getElementById("f").value;
    var l = document.getElementById("l").value;
    var m = document.getElementById("m").value;
    var g = document.getElementById("g").value;
    var e = document.getElementById("e").value;
    var n = document.getElementById("n").value;


    var form = new FormData();


    form.append("f", f);
    form.append("l", l);
    form.append("m", m);
    form.append("g", g);
    form.append("e", e);
    form.append("n", n);




    var r = new XMLHttpRequest();


    r.onreadystatechange = function() {


        if (r.readyState == 4) {


            var t = r.responseText;

            if (t == "success") {

                alert("Register Success");
                window.location = "adminPanel.php";

            } else {
                alert(t);
            }

        }


    }


    r.open("POST", "academicOfficerRegisterProcess.php", true);
    r.send(form);



}

var teacherEmail;

function tInvite(e) {

    teacherEmail = e;

}


function sentTeacherInvitation() {

    var tun = document.getElementById("tun");
    var tp = document.getElementById("tp");

    var f = new FormData();

    f.append("tun", tun.value);
    f.append("tp", tp.value);
    f.append("temail", teacherEmail);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {
                alert("Invitation Send Successfull");
                window.location.reload();

            } else {
                alert(t);
            }


        }

    }

    r.open("POST", "sendTeacherInvitation.php", true);
    r.send(f);

}



var academicOfficerEmail;

function aoInvite(e) {

    academicOfficerEmail = e;

}



function sentAcademicOfficerInvitation() {

    var aoun = document.getElementById("aoun");
    var aop = document.getElementById("aop");

    var f = new FormData();

    f.append("aoun", aoun.value);
    f.append("aop", aop.value);
    f.append("aoemail", academicOfficerEmail);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {

                alert("Invitation Send Successfull");
                window.location.reload();

            } else {
                alert(t);
            }


        }

    }

    r.open("POST", "sendAcademicOfficerInvitation.php", true);
    r.send(f);

}




var tEmail;

function tVerify(e) {

    tEmail = e;

    var f = new FormData();
    f.append("e", tEmail);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {
                alert("Verifyed");
                window.location.reload();
            } else {
                alert(t);
            }


        }


    }



    r.open("POST", "tVerifyProcess.php", true);
    r.send(f);



}




var aoEmail;

function aoVerify(e) {

    aoEmail = e;

    var f = new FormData();
    f.append("e", aoEmail);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {
                alert("Verifyed");
                window.location.reload();
            } else {
                alert(t);
            }


        }


    }



    r.open("POST", "aoVerifyProcess.php", true);
    r.send(f);



}


function tVcsend() {



    var tun = document.getElementById("tun").value;
    var tp = document.getElementById("tp").value;



    var f = new FormData();

    f.append("tun", tun);
    f.append("tp", tp);



    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {



        if (r.readyState == 4) {


            var t = r.responseText;

            if (t == "success") {

                alert("Verification Code Send. Please Check Inbox.");

            } else {
                alert(t);
            }



        }


    }

    r.open("POST", "tVcSendProcess.php", true);
    r.send(f);



}



function tLogin() {

    var tun = document.getElementById("tun").value;
    var tp = document.getElementById("tp").value;
    var tvc = document.getElementById("tvc");

    var f = new FormData();

    f.append("tun", tun);
    f.append("tp", tp);
    f.append("tvc", tvc.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {

                alert("Verifyed");
                window.location = "teacherPanel.php";

            } else {
                alert(t);
            }

        }


    }


    r.open("POST", "teacherLoginProcess.php", true);
    r.send(f);


}



function tLogin2() {

    var tun = document.getElementById("tun").value;
    var tp = document.getElementById("tp").value;


    var f = new FormData();

    f.append("tun", tun);
    f.append("tp", tp);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {


                window.location = "teacherPanel.php";

            } else {
                alert(t);
            }

        }


    }


    r.open("POST", "teacherLoginProcess.php", true);
    r.send(f);


}



function aoVcSend() {



    var aoun = document.getElementById("aoun").value;
    var aop = document.getElementById("aop").value;



    var f = new FormData();

    f.append("aoun", aoun);
    f.append("aop", aop);



    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {



        if (r.readyState == 4) {


            var t = r.responseText;

            if (t == "success") {

                alert("Verification Code Send. Please Check Inbox.");

            } else {
                alert(t);
            }



        }


    }

    r.open("POST", "aoVcSendProcess.php", true);
    r.send(f);



}



function aoLogin() {


    var aoun = document.getElementById("aoun").value;
    var aop = document.getElementById("aop").value;
    var aovc = document.getElementById("aovc");

    var f = new FormData();

    f.append("aoun", aoun);
    f.append("aop", aop);
    f.append("aovc", aovc.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {

                alert("Verifyed");
                window.location = "academicOfficerPanel.php";

            } else {
                alert(t);
            }

        }


    }


    r.open("POST", "academicOfficerLoginProcess.php", true);
    r.send(f);




}

function aoLogin2() {


    var aoun = document.getElementById("aoun").value;
    var aop = document.getElementById("aop").value;


    var f = new FormData();

    f.append("aoun", aoun);
    f.append("aop", aop);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {


                window.location = "academicOfficerPanel.php";

            } else {
                alert(t);
            }

        }


    }


    r.open("POST", "academicOfficerLoginProcess.php", true);
    r.send(f);




}



function tBlockUnblock(e) {

    var temail = e;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "blocked") {

                alert("Blocked");
                document.getElementById("tblock").innerHTML = "UnBlock";

            } else if (t == "unblocked") {

                alert("UnBlocked");
                document.getElementById("tblock").innerHTML = "Block";

            }


        }



    }

    r.open("GET", "tBlockUnblockProcess.php?e=" + temail, true);
    r.send();


}



function aoBlockUnblock(e) {

    var aoemail = e;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "blocked") {

                alert("Blocked");
                document.getElementById("aoblock").innerHTML = "UnBlock";

            } else if (t == "unblocked") {

                alert("UnBlocked");
                document.getElementById("aoblock").innerHTML = "Block";



            }


        }



    }

    r.open("GET", "aoBlockUnblockProcess.php?e=" + aoemail, true);
    r.send();


}



function changeAImage() {
    var view = document.getElementById("img");
    var file = document.getElementById("image");

    file.onchange = function() {
        var file1 = this.files[0];
        var url = window.URL.createObjectURL(file1);
        view.src = url;
    }

}

function uploadAImage(e) {

    var image = document.getElementById("image");
    var email = e;
    var f = new FormData();

    f.append("image", image.files[0]);
    f.append("email", email);

    var r = new XMLHttpRequest();


    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            alert(t);

        }


    }


    r.open("POST", "adminImageUploadProcess.php", true);
    r.send(f);

}



function updateAdminProfile(e) {

    var f = document.getElementById("f").value;
    var l = document.getElementById("l").value;
    var n = document.getElementById("n").value;
    var m = document.getElementById("m").value;
    var a = document.getElementById("a").value;
    var g = document.getElementById("g").value;


    var form = new FormData();

    form.append("f", f);
    form.append("l", l);
    form.append("n", n);
    form.append("m", m);
    form.append("a", a);
    form.append("g", g);
    form.append("e", e);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {

                alert("Profile Updated");

            } else {
                alert(t);
            }


        }


    }

    r.open("POST", "updateAdminProfileProcess.php", true);
    r.send(form);


}


function adminLogout() {


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {
                alert("Log Outed");
                window.location = "index.php";
            } else {
                alert(t);
            }

        }


    }

    r.open("GET", "adminLogoutProcess.php", true)
    r.send();

}



function changeTImage() {

    var view = document.getElementById("img");
    var file = document.getElementById("image");

    file.onchange = function() {
        var file1 = this.files[0];
        var url = window.URL.createObjectURL(file1);
        view.src = url;
    }

}



function uploadTImage(e) {

    var image = document.getElementById("image");
    var email = e;
    var f = new FormData();

    f.append("image", image.files[0]);
    f.append("email", email);

    var r = new XMLHttpRequest();


    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            alert(t);

        }


    }


    r.open("POST", "teacherImageUploadProcess.php", true);
    r.send(f);

}



function updateTeacherProfile(e) {

    var f = document.getElementById("f").value;
    var l = document.getElementById("l").value;
    var n = document.getElementById("n").value;
    var m = document.getElementById("m").value;
    var a = document.getElementById("a").value;
    var g = document.getElementById("g").value;


    var form = new FormData();

    form.append("f", f);
    form.append("l", l);
    form.append("n", n);
    form.append("m", m);
    form.append("a", a);
    form.append("g", g);
    form.append("e", e);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {

                alert("Profile Updated");

            } else {
                alert(t);
            }


        }


    }

    r.open("POST", "updateTeacherProfileProcess.php", true);
    r.send(form);


}


function teacherLogout() {


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {
                alert("Log Outed");
                window.location = "index.php";
            } else {
                alert(t);
            }

        }


    }

    r.open("GET", "teahcerLogoutProcess.php", true);
    r.send();

}




function changeAOImage() {

    var view = document.getElementById("img");
    var file = document.getElementById("image");

    file.onchange = function() {
        var file1 = this.files[0];
        var url = window.URL.createObjectURL(file1);
        view.src = url;
    }

}



function uploadAOImage(e) {

    var image = document.getElementById("image");
    var email = e;
    var f = new FormData();

    f.append("image", image.files[0]);
    f.append("email", email);

    var r = new XMLHttpRequest();


    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            alert(t);

        }


    }


    r.open("POST", "academicOfficerImageUploadProcess.php", true);
    r.send(f);

}



function updateAcademicOfficerProfile(e) {

    var f = document.getElementById("f").value;
    var l = document.getElementById("l").value;
    var n = document.getElementById("n").value;
    var m = document.getElementById("m").value;
    var a = document.getElementById("a").value;
    var g = document.getElementById("g").value;


    var form = new FormData();

    form.append("f", f);
    form.append("l", l);
    form.append("n", n);
    form.append("m", m);
    form.append("a", a);
    form.append("g", g);
    form.append("e", e);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {

                alert("Profile Updated");

            } else {
                alert(t);
            }


        }


    }

    r.open("POST", "updateAcademicOfficerProfileProcess.php", true);
    r.send(form);


}


function academicOfficerLogout() {


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {
                alert("Log Outed");
                window.location = "index.php";
            } else {
                alert(t);
            }

        }


    }

    r.open("GET", "academicOfficerLogoutProcess.php", true);
    r.send();

}



function addLessonFile() {


    var view = document.getElementById("filev");
    var file = document.getElementById("f");
    //var ln = document.getElementById("ln");

    file.onchange = function() {

        var file_count = file.files.length;

        if (file_count == 0) {
            alert("Please Select Your File");
        } else {
            var file1 = this.files[0];
            // var url = window.URL.createObjectURL(file1);
            var url = this.files[0]["name"];
            // var url = ln.value;
            view.value = url;

        }


    }


}



function addLessonNote(e) {

    var ln = document.getElementById("ln").value;
    var gr = document.getElementById("gr").value;
    var sb = document.getElementById("sb").value;
    var f = document.getElementById("f");
    var email = e;

    var form = new FormData();

    form.append("ln", ln);
    form.append("gr", gr);
    form.append("sb", sb);
    form.append("f", f.files[0]);
    form.append("email", email);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {


            var t = r.responseText;

            if (t == "success") {
                alert("New Lesson Note Added");
                window.location.reload();
            } else {
                alert(t);
            }




        }


    }

    r.open("POST", "addLessonNoteProcess.php", true);
    r.send(form);

}




function addAssignmentFile() {


    var view = document.getElementById("filev");
    var file = document.getElementById("f");
    //var ln = document.getElementById("ln");

    file.onchange = function() {

        var file_count = file.files.length;

        if (file_count == 0) {
            alert("Please Select Your File");
        } else {
            var file1 = this.files[0];
            // var url = window.URL.createObjectURL(file1);
            var url = this.files[0]["name"];
            // var url = ln.value;
            view.value = url;

        }


    }

}


function addAssignment(e) {

    var an = document.getElementById("an").value;
    var gr = document.getElementById("gr").value;
    var sb = document.getElementById("sb").value;
    var f = document.getElementById("f");
    var email = e;

    var form = new FormData();

    form.append("an", an);
    form.append("gr", gr);
    form.append("sb", sb);
    form.append("f", f.files[0]);
    form.append("email", email);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {


            var t = r.responseText;

            if (t == "success") {
                alert("New Assignment Added");
                window.location.reload();
            } else {
                alert(t);
            }




        }


    }

    r.open("POST", "addAssignmentProcess.php", true);
    r.send(form);

}



function addAssignmentMark() {


    var mrk = document.getElementById("mrk").value;
    var st = document.getElementById("st").value;
    var sb = document.getElementById("sb").value;
    var an = document.getElementById("an").value;
    var as = document.getElementById("as").value;

    var form = new FormData();

    form.append("mrk", mrk);
    form.append("st", st);
    form.append("sb", sb);
    form.append("an", an);
    form.append("as", as);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {


            var t = r.responseText;

            if (t == "success") {
                alert("Assignment Mark Added");
                window.location.reload();
            } else {
                alert(t);
            }




        }


    }

    r.open("POST", "addAssignmentMarkProcess.php", true);
    r.send(form);


}



function registerNewStudent() {

    var fn = document.getElementById("fn").value;
    var ln = document.getElementById("ln").value;
    var em = document.getElementById("em").value;
    var un = document.getElementById("un").value;
    var pw = document.getElementById("pw").value;
    var mo = document.getElementById("mo").value;
    var dob = document.getElementById("dob").value;
    var ge = document.getElementById("ge").value;
    var gr = document.getElementById("gr").value;

    var form = new FormData();

    form.append("fn", fn);
    form.append("ln", ln);
    form.append("em", em);
    form.append("un", un);
    form.append("pw", pw);
    form.append("mo", mo);
    form.append("dob", dob);
    form.append("ge", ge);
    form.append("gr", gr);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {


            var t = r.responseText;

            if (t == "success") {
                alert("Student Registerd");
                window.location.reload();
            } else {
                alert(t);
            }




        }


    }

    r.open("POST", "registerNewStudentProcess.php", true);
    r.send(form);




}



var studentEmail;

function stInvite(e) {

    studentEmail = e;

}



function sentStudentInvitation() {

    var stun = document.getElementById("stun");
    var stpw = document.getElementById("stpw");

    var f = new FormData();

    f.append("stun", stun.value);
    f.append("stpw", stpw.value);
    f.append("stemail", studentEmail);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {

                alert("Invitation Send Successfull");
                window.location.reload();

            } else {
                alert(t);
            }


        }

    }

    r.open("POST", "sendStudentInvitation.php", true);
    r.send(f);

}





function sVcsend() {



    var sun = document.getElementById("sun").value;
    var sp = document.getElementById("sp").value;



    var f = new FormData();

    f.append("sun", sun);
    f.append("sp", sp);



    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {



        if (r.readyState == 4) {


            var t = r.responseText;

            if (t == "success") {

                alert("Verification Code Send. Please Check Inbox.");

            } else {
                alert(t);
            }



        }


    }

    r.open("POST", "sVcSendProcess.php", true);
    r.send(f);



}



function sLogin() {

    var sun = document.getElementById("sun").value;
    var sp = document.getElementById("sp").value;
    var svc = document.getElementById("svc");

    var f = new FormData();

    f.append("sun", sun);
    f.append("sp", sp);
    f.append("svc", svc.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {

                alert("Verifyed");
                window.location = "studentPanel.php";

            } else {
                alert(t);
            }

        }


    }


    r.open("POST", "studentLoginProcess.php", true);
    r.send(f);


}



function sLogin2() {

    var sun = document.getElementById("sun").value;
    var sp = document.getElementById("sp").value;


    var f = new FormData();

    f.append("sun", sun);
    f.append("sp", sp);



    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {


                window.location = "studentPanel.php";

            } else {
                alert(t);
            }

        }


    }


    r.open("POST", "studentLoginProcess.php", true);
    r.send(f);


}



var stEmail;

function stVerify(e) {

    stEmail = e;

    var f = new FormData();
    f.append("e", stEmail);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {
                alert("Verifyed");
                window.location.reload();
            } else {
                alert(t);
            }


        }


    }



    r.open("POST", "stVerifyProcess.php", true);
    r.send(f);



}


function stBlockUnblock(e) {

    var stemail = e;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "blocked") {

                alert("Blocked");
                document.getElementById("stblock").innerHTML = "UnBlock";

            } else if (t == "unblocked") {

                alert("UnBlocked");
                document.getElementById("stblock").innerHTML = "Block";



            }


        }



    }

    r.open("GET", "stBlockUnblockProcess.php?e=" + stemail, true);
    r.send();


}



function changeSTImage() {

    var view = document.getElementById("img");
    var file = document.getElementById("image");

    file.onchange = function() {
        var file1 = this.files[0];
        var url = window.URL.createObjectURL(file1);
        view.src = url;
    }

}

function uploadSTImage(e) {

    var image = document.getElementById("image");
    var email = e;
    var f = new FormData();

    f.append("image", image.files[0]);
    f.append("email", email);

    var r = new XMLHttpRequest();


    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {
                alert("Uploaded");
            } else {
                alert(t);
            }

        }


    }


    r.open("POST", "studentImageUploadProcess.php", true);
    r.send(f);

}



function updateStudentProfile(e) {

    var f = document.getElementById("f").value;
    var l = document.getElementById("l").value;
    var dob = document.getElementById("dob").value;
    var m = document.getElementById("m").value;
    var a = document.getElementById("a").value;
    var g = document.getElementById("g").value;


    var form = new FormData();

    form.append("f", f);
    form.append("l", l);
    form.append("dob", dob);
    form.append("m", m);
    form.append("a", a);
    form.append("g", g);
    form.append("e", e);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {

                alert("Profile Updated");

            } else {
                alert(t);
            }


        }


    }

    r.open("POST", "updateStudentProfileProcess.php", true);
    r.send(form);


}


function studentLogout() {


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "success") {
                alert("Log Outed");
                window.location = "index.php";
            } else {
                alert(t);
            }

        }


    }

    r.open("GET", "studentLogoutProcess.php", true);
    r.send();

}


function markReleaseUnRelease(id) {




    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {


        if (r.readyState == 4) {

            var t = r.responseText;

            if (t == "released") {

                alert("Released");
                document.getElementById("markRelease").classList = "btn badge rounded-pill text-bg-success disabled";
                document.getElementById("markUnRelease").classList = "btn badge rounded-pill text-bg-danger";

            } else if (t == "unreleased") {

                alert("Un-Released");
                document.getElementById("markRelease").classList = "btn badge rounded-pill text-bg-success ";
                document.getElementById("markUnRelease").classList = "btn badge rounded-pill text-bg-danger disabled";

            }


        }



    }


    r.open("GET", "markReleaseUnReleaseProcess.php?id=" + id, true);
    r.send();


}






function addAnswerSheetFile() {


    var view = document.getElementById("filev");
    var file = document.getElementById("f");
    //var ln = document.getElementById("ln");

    file.onchange = function() {

        var file_count = file.files.length;

        if (file_count == 0) {
            alert("Please Select Your File");
        } else {
            var file1 = this.files[0];
            // var url = window.URL.createObjectURL(file1);
            var url = this.files[0]["name"];
            // var url = ln.value;
            view.value = url;

        }


    }

}


function uploadAnswerSheet(i) {

    var an = document.getElementById("an").value;
    var f = document.getElementById("f");
    var sid = i;

    var form = new FormData();

    form.append("an", an);
    form.append("f", f.files[0]);
    form.append("sid", sid);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {


            var t = r.responseText;

            if (t == "success") {
                alert("AswerSheet Uploaded");
                window.location.reload();
            } else {
                alert(t);
            }




        }


    }

    r.open("POST", "uploadAnswerSheetProcess.php", true);
    r.send(form);

}






var md;

function studentPayment() {



    var studentPaymentModal = document.getElementById("studentPaymentModal");
    md = new bootstrap.Modal(studentPaymentModal);
    md.show();

    alert("Trial Period Expired");




}



function payNow(id) {



    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            var obj = JSON.parse(t);

            var email = obj["email"];
            var amount = obj["amount"];

            if (t == "1") {
                alert("Please Log In and try again Later");
                window.location = "index.php";
            } else if (t == "2") {
                alert("Something Went Wrong");
                window.location = "index.php";
            } else {
                // Payment completed. It can be a successful failure.
                payhere.onCompleted = function onCompleted(orderId) {
                    console.log("Payment completed. OrderID:" + orderId);
                    approvePayment(id);
                    // Note: validate the payment and show success or failure page to the customer
                };

                // Payment window closed
                payhere.onDismissed = function onDismissed() {
                    // Note: Prompt user to pay again or show an error page
                    console.log("Payment dismissed");
                };

                // Error occurred
                payhere.onError = function onError(error) {
                    // Note: show an error page
                    console.log("Error:" + error);
                };

                // Put the payment variables here
                var payment = {
                    "sandbox": true,
                    "merchant_id": "1221052", // Replace your Merchant ID
                    "return_url": "http://localhost/SLacademi/studentPanel.php", // Important
                    "cancel_url": "http://localhost/SLacademi/studentPanel.php", // Important
                    "notify_url": "http://sample.com/notify",
                    "order_id": obj["id"],
                    "items": "SL Academi Student Payment",
                    "amount": amount,
                    "currency": "LKR",
                    "first_name": obj["fname"],
                    "last_name": obj["lname"],
                    "email": email,
                    "phone": obj["mobile"],
                    "address": obj["address"],
                    "city": "Colombo",
                    "country": "Sri Lanka"

                };

                // Show the payhere.js popup, when "PayHere Pay" is clicked
                //  document.getElementById('payhere-payment').onclick = function(e) {
                payhere.startPayment(payment);
                //   };
            }

        }
    }

    r.open("GET", "payNowProcess.php?id=" + id, true);
    r.send();

}

function approvePayment(id) {


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "success") {
                window.location = "studentPanel.php";
            } else {
                alert(t);

            }

        }
    }


    r.open("GET", "approvePaymentProcess.php?id=" + id, true);
    r.send();

}