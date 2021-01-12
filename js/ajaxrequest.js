$(document).ready(function(){
    // insert student registration 
    // reset registration form 
    $("#loginbtn").on("click",function(){
        $("#loginform"),trigger("reset");
    })
    
   $("#stusubmit").on("click",function(){
    
    var stuname = $("#stuname").val().trim();
    var stuemail = $("#stuemail").val().trim();
    var stupassword = $("#stupassword").val().trim();
    if( stuname == "" && stuemail == "" && stupassword == ""){
        $(".response").fadeIn();
        $(".response").html("<div class='alert alert-warning mt-1' role='alert'>insert all fields</div>");
        setTimeout(function(){
            $(".response").fadeOut();
        },3000);
       
    }else{
        $.ajax({
            url: 'student/addstudent.php',
            type: 'post',
            data:{
                stusignup: "stusignup",
                stuname: stuname,
                stuemail: stuemail,
                stupassword: stupassword,
            },
            success: function(data){
                $("#registerform").trigger("reset");
                $(".response").fadeIn();
                $(".response").html(data);
                setTimeout(function(){
                    $(".response").fadeOut();
                },6000);
               
            },
        });
    }
    // registration ajax 

   });

   // ajax start student login verification 
 
   $("#stulogin").on("click",function(e){
    $("#login_form").trigger("reset");
    e.preventDefault();
   
    var stuname = $("#email").val().trim();
    var stupass = $("#password").val().trim();
    
    if(stuname == "" && stupass == ""){
        $(".lresponse").fadeIn();
        $(".lresponse").html("<div class='alert alert-warning mt-1' role='alert'>please insert all fields</div>");
        setTimeout(function(){
            $(".lresponse").fadeOut();
        },4000)
    }else{
        $.ajax({
            url: "student/studentlogin.php",
            type: "post",
            data: {
                stuname: stuname,
                stupass: stupass
            },
            success: function(data){
                if(data == 1){
                    $(".lresponse").fadeIn();
                    $(".lresponse").html("<div class='spinner-border text-success float-right' role='status'></div>");
                    setTimeout(function(){
                        $(".lresponse").fadeOut();
                        window.location.href = "index.php";
                    },3000);
                }else{
                    $(".lresponse").fadeIn();
                    $(".lresponse").html("<div class='alert alert-danger mt-1' role='alert'>invalid informaiton</div>");
                    setTimeout(function(){
                        $(".lresponse").fadeOut();
                    },3000);
                }
              
            }
        })
    }


   })




 // ajax student login verification end
});
