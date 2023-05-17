$(document).ready(
    function(){
        //Ajax call form Already Exists Email verification
        $("cusemail").on("keypress blur",function(){
            var cusemail=$("#cusemail").val();
            $.ajax({
                url:'customer/addcustomer.php',
                method:'POST',
                data:{
                    checkemail:"checkemail",
                    cusemail:cusemail,

                },
                success: function (data) {
                    console.log(data);
                    if(data != 0){
                        $("#errorMsg").html(
                            '<small style="color:red;">Email ID Already Used !</small>'
                    );
                    $("#sign up").attr("disabled",true);
                    }else if(data == 0){
                        $("#statusMsg2").html(
                            '<small style="color:green;">There you Go !</small>'
                    );
                    

                    }

                },
            });
        });
    }
)




function addcus(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var cusname=$("#cusname").val();
    var cusemail=$("#cusemail").val();
    var cuspass=$("#cuspass").val();
    $("#errorMsg").html('');
    $('#successMsg').html('');
    // checking form fields on form submission
    if(cusname.trim()==""){
        $("#statusMsg1").html('<small style="color:red;">Please Enter Name !</small>');
        $("#cusname").focus();
        return false;
    }else if(cusemail.trim()==""){
        $("#statusMsg2").html('<small style="color:red;">Please Enter Email !</small>');
        $("#cusname").focus();
        return false;
     } else if(cusemail.trim() != "" && !reg.test(cusemail)){
        $("#statusMsg2").html(
            '<small style="color:red;">please enter valid email e.g. example@mail.com</small>'
        );
        $("#cusemail").focus();
        return false;
        }

     else if(cuspass.trim()==""){
        $("#statusMsg3").html('<small style="color:red;">Please Enter Pass !</small>');
        $("#cusname").focus();
        return false;
    }else{
        $.ajax({
            url:"MAININCLUDE/addcustomer.php",
            method:"POST",
            dataType:"json",
            data:{
                cussignup:"cussign up",
            cusname : cusname, 
            cusemail : cusemail,
            cuspass : cuspass,
            },
            success:function(data){
                console.log(data);
                if(data == "OK"){
                    $("#successMsg").html("<span class='alert alert-success'>Registration Successful !</span>");
                    window.location.reload();

                }else if(data == "failed"){
                    $("#successMsg").html("<span class='alert alert-danger'>Unable to Register</span>");
                    clearcusRegfield(); 
                }
                else if(data == 403)
                {
                    $("#errorMsg").html("<span class='alert alert-danger'>Email exist</span>");
                    $("#statusMsg2").html("<span class=''>Email ID already used!</span>");
                    window.location.reload();

                    
                    
                }
                
            }
        })
        
    }
}

//empty all fileds
function clearcusRegfield(){
    $("#cusRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");

}


function checkcusLogin(){
    var cusLogemail=$("#cusLogemail").val();
    var cusLogpass=$("#cusLogpass").val();
    $.ajax({
        url:"MAININCLUDE/customer_login.php",
        method:"POST",
        dataType:"json",
        data:{
            cusLogemail:cusLogemail,
            cusLogpass:cusLogpass,


        },
        success:function(data){
            if(data != 0)
            {
                $("#cusLogemail").val('');
                $("#cusLogpass").val('');
                // $("#cusLoginModalCenter").modal("hide");
                $("#success").html('successfully done');
                window.location.reload();
            }
        },
        
});

}
