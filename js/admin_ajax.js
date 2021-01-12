$(document).ready(function(){
    $("#adminlgbtn").on("click",function(e){
        e.preventDefault();
       
        var a_email = $("#a_email").val().trim();
        var a_pass = $("#a_pass").val().trim();
        
        if(a_email == "" && a_pass == ""){
            $(".aresponse").fadeIn();
            $(".aresponse").html("<div class='alert alert-warning mt-1' role='alert'>please insert all fields</div>");
            setTimeout(function(){
                $(".aresponse").fadeOut();
            },4000)
        }else{
            $.ajax({
                url: "admin/adminlogin.php",
                type: "post",
                data: {
                    a_email: a_email,
                    a_pass: a_pass
                },
                success: function(data){
                    if(data == 1){
                        $(".aresponse").fadeIn();
                        $(".aresponse").html("<div class='spinner-border text-success float-right' role='status'></div>");
                        setTimeout(function(){
                            $(".aresponse").fadeOut();
                            window.location.href = "admin/dashboard.php";
                        },3000)
                    }else{
                        $(".aresponse").fadeIn();
                        $(".aresponse").html("<div class='alert alert-danger mt-1' role='alert'>invalid informaiton</div>");
                        setTimeout(function(){
                            $(".aresponse").fadeOut();
                        },3000)
                    }

                   
                }
            })
        }
    
    
       })
})