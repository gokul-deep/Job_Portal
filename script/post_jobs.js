function resetForm() 
{
	$('#form')[0].reset();
}

function submitForm() 
{
    $("#post_job").on('click', function () {
    $.ajax({
        type: "POST",
        url: 'http://localhost/trial/job_portal_trial/post_jobs/post_jobs.php',
        data: $("#form").serialize(),
        success: function (response) {
            console.log("response",response)
            $("#success").text("Form Submit Success")
            resetForm();
        }
    });
});

}


$(document).ready(function() {
	submitForm();
    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});