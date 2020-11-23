$(document).ready(function (){
    
    $("#signup_form").submit(function (e) {
        e.preventDefault();
        
        var form_data = $(this).serialize();
        
        $.post({
           url: "controller/signup.php",
           data: form_data,
           success: function(data){
               //alert(data);
               if(data == "emailError"){
                   $('#emailError').html("Email has been used");
               }else if(data == "success"){
                   window.location = "index.php";
               }
           }
        });
        
    });
    
});