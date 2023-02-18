
var baseUrl="http://localhost/trial/job_portal_trial/signup/service/";
function submitForm() 
{
    $("#signup-employer").on('click', function () {
    $.ajax({
        type: "POST",
        url: baseUrl+'signup_company.php',
        data: $("#form1").serialize(),
        success: function (response) {
            // console.log("response",response)
            // $("#success").text("signup success")
            if(response==1){
                window.location.href= baseUrl+"../views/index.php";
            }
            else if(response==2){
                alert("Passwords does not match!");
            }
            else if(response==3){
                alert("Email already exists!");
            }
            else{}
        }
    });
});
$("#signup-candidate").on('click', function () {
    $.ajax({
        type: "POST",
        url: baseUrl+'signup_candidate.php',
        data: $("#form2").serialize(),
        success: function (response) {
            // console.log("response",response)
            // $("#success").text("signup success")
            if(response==1){
                window.location.href= baseUrl+"../views/index.php";
            }
            else if(response==2){
                alert("Passwords does not match!");
            }
            else if(response==3){
                alert("Email already exists!");
            }
            else{}
        }
    });
});
$("#login_employer").on('click', function () {
    $.ajax({
        type: "POST",
        url: baseUrl+'login_company.php',
        data: $("#form3").serialize(),
        success: function (response) {
            // console.log("response",response)
            // $("#success").text("signup success")
            if(response==1){
                window.location.href= baseUrl+"../views/post_jobs.html";
            }
            else if(response==2){
                alert("Email and password does not match!");
            }
            else{}
        }
    });
});
$("#login_candidate").on('click', function () {
    $.ajax({
        type: "POST",
        url: 'http://localhost/trial/job_portal_trial/signup/service/login_candidate.php',
        data: $("#form4").serialize(),
        success: function (response) {
            console.log("response",response)
            // $("#success").text("signup success")
            if(response==1){
                window.location.href= baseUrl+"../views/jobs.php";
            }
            else if(response==2){
                alert("Email and password does not match!");
            }
            else{}
        }
    });
});
}

$(document).ready(function() {
	submitForm();
});
